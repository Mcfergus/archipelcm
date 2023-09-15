@extends('admin.layouts.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 ml-4 text-gray-800">Certification</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Certification</li>
            </ol>
    </div>

    <div class="row justify-content-center">
      @if(Session::has('message'))
        <div class="alert alert-success">
          {{Session::get('message')}}
        </div>

      @endif

      <div class="col-lg-10 mb-5" id="app" >
        <form action="{{route('certification.store')}}" method="POST" enctype="multipart/form-data">@csrf
              <div class="card mb-6">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Create Certification</h6>
                </div>
                <div class="card-body">
                    <div class="form-group"> 
                      <label for="" class="form-label ">Title</label>
                      <input type="text" name="title" class="form-control @error('title') is-invalid @enderror " id="" aria-describedby=""
                        placeholder="Enter title of certification">
                        @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                    
                    </div>
                    <div class="form-group">
                      <label for="" class="form-label">Short text</label>
                      <textarea name="short_text" id="summernote1" class="form-control mb-5 @error('short_text') is-invalid @enderror "></textarea>
                       @error('short_text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                      
                    </div>

                    <div class="form-group">
                      <label for="" class="form-label" >Description</label>
                      <textarea name="description"  id="summernote" class="form-control @error('description') is-invalid @enderror "></textarea>
                       @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                      
                    </div>

                    <div class="form-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror  " id="customFile" name="image">
                        <label class="custom-file-label form-label" for="customFile">Choose file</label>
                            @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      </div>
                       
                    </div>

                      <div class="form-group"> 
                      <label for="" class="form-label">Duration</label>
                      <input type="text" name="duration" class="form-control @error('duration') is-invalid @enderror " id="" aria-describedby=""
                        >
                        @error('duration')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                      </div>
                    
             

            
                
                    <button type="submit" class="btn btn-primary">Submit</button>
                 
                </div>
              </div>
            </form>

          </div>
</div>



@endsection


