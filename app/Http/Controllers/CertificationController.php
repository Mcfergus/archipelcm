<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use Illuminate\Http\Request;


class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certifications = Certification::get();
        return view('admin.certification.index', compact('certifications', $certifications));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.certification.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=> 'required',
            'short_text'=> 'required|min:3',
            'description'=> 'required|min:3',
            'image'=> 'required|mimes:jpeg,png',
            'duration'=>'required',
            
        ]);
        $image = $request->file('image')->store('public/product');

        Certification::create([
            'title'=>$request->title,
            'short_text'=>$request->short_text,
            'description'=>$request->description,
            'image'=>$image,
            'duration'=>$request->duration,
            
        ]);
        notify()->success('Certification created Successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $certification = Certification::find($id);
        return view('admin.certification.edit', compact('certification'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $certification = Certification::find($id);
        $filename = $certification->image;
        if($request->file('image')){
            $image = $request->file('image')->store('public/product');
            \Storage::delete($filename);
        $certification->title = $request->title;
        $certification->short_text = $request->short_text;
        $certification->description = $request->description;
        $certification->image = $image;
        $certification->duration=$request->duration;
        $certification->save();
       }else{
        $certification->title = $request->title;
        $certification->short_text = $request->short_text;
        $certification->description = $request->description;
        $certification->duration=$request->duration;
       

        $certification->save();
    }
        notify()->success('Certification updated successfully!');
        return redirect()->route('certification.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $certification = Certification::find($id);
        $filename = $certification->image;
        $certification->delete();
        \Storage::delete($filename);
        notify()->success('certification deleted successfully!');
        return redirect()->route('certification.index');
    }
}
