<?php

namespace App\Http\Controllers;

use App\Models\Employment;
use Illuminate\Http\Request;

class EmploymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employments = Employment::get();
        return view('admin.employment.index', compact('employments', $employments));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employment.create');
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
            'post'=> 'required',
            'location'=> 'required',
            'dateline'=> 'required',
            'description'=> 'required|min:3',
            'image'=> 'required|mimes:jpeg,png',
            
            
        ]);
        $image = $request->file('image')->store('public/product');

        Employment::create([
            'title'=>$request->title,
            'post'=>$request->post,
            'location'=>$request->location,
            'dateline'=>$request->dateline,
            'description'=>$request->description,
            'image'=>$image,
            
            
        ]);
        notify()->success('Employment Offer created Successfully!');
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
        $employment = Employment::find($id);
        return view('admin.employment.edit', compact('employment'));
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
        $employment = Employment::find($id);
        $filename = $employment->image;
        if($request->file('image')){
            $image = $request->file('image')->store('public/product');
            \Storage::delete($filename);
        $employment->title = $request->title;
        $employment->post = $request->post;
        $employment->location = $request->location;
        $employment->dateline=$request->dateline;
        $employment->description = $request->description;
        $employment->image = $image;
        $employment->save();
       }else{
        $employment->title = $request->title;
        $employment->post = $request->post;
        $employment->location = $request->location;
        $employment->dateline=$request->dateline;
        $employment->description = $request->description;

        $employment->save();
    }
        notify()->success('Employment offer updated successfully!');
        return redirect()->route('employment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employment = Employment::find($id);
        $filename = $employment->image;
        $employment->delete();
        \Storage::delete($filename);
        notify()->success('Employment offer deleted successfully!');
        return redirect()->route('employment.index');
    }
}
