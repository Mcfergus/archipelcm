@extends('admin.layouts.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 ml-4 text-gray-800">Employment</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Employment</li>
            </ol>
    </div>
    <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Employments</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Job Post</th>
                        <th>Location</th>
                        <th>Dateline</th>
                        <th>Description</th>
                       
                        <th></th>
                        <th></th>
                        
                      </tr>
                    </thead>
                    
                    <tbody>
                      @if(count($employments)>0)
                      @foreach($employments as $employment)
                      <tr>
                        <td>
                          <img src="{{Storage::url($employment->image)}}" width="100">
                        </td>
                        <td>{{$employment->title}}</td>
                        <td>{{$employment->post}}</td>
                        <td>{{$employment->location}}</td>
                        <td>{{$employment->dateline}}</td>
                        <td>{!!$employment->description!!}</td>
                        
                        
                        <td>
                          <a href="{{route('employment.edit', [$employment->id])}}">
                              <button class="btn btn-primary">Edit</button>
                          </a>
                        </td>
                        <td>
                           <form action="{{route('employment.destroy', [$employment->id])}}" method="POST" onsubmit="return confirmDelete()">@csrf
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-sm btn-danger" >Delete</button>
                            
                          </form>
                        </td>

                         
                      </tr>
                      @endforeach
                      @else
                      <td>No Employments</td>
                      @endif
                    

                    </tbody>
                  </table>
                </div>
              </div>
            </div>

 @endsection