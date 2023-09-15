@extends('admin.layouts.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 ml-4 text-gray-800">Certification</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Certification</li>
            </ol>
    </div>
    <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Certifications</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Short Text</th>
                        <th>Description</th>
                        <th>Duration</th>
                       
                        <th></th>
                        <th></th>
                        
                      </tr>
                    </thead>
                    
                    <tbody>
                      @if(count($certifications)>0)
                      @foreach($certifications as $certification)
                      <tr>
                        <td>
                          <img src="{{Storage::url($certification->image)}}" width="100">
                        </td>
                        <td>{{$certification->title}}</td>
                        <td>{!!  $certification->short_text !!}</td>
                        <td>{!!$certification->description!!}</td>
                        <td>{{$certification->duration}}</td>
                        
                        <td>
                          <a href="{{route('certification.edit', [$certification->id])}}">
                              <button class="btn btn-primary">Edit</button>
                          </a>
                        </td>
                        <td>
                           <form action="{{route('certification.destroy', [$certification->id])}}" method="POST" onsubmit="return confirmDelete()">@csrf
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-sm btn-danger" >Delete</button>
                            
                          </form>
                        </td>

                         
                      </tr>
                      @endforeach
                      @else
                      <td>No Certifications</td>
                      @endif
                    

                    </tbody>
                  </table>
                </div>
              </div>
            </div>

 @endsection