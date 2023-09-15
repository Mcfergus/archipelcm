@extends('frontpage.layouts.main')

@section('content')


<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">OUR CERTIFICATIONS</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          
        </div>
      </div>
    </section>

<section class="service-details">
      <div class="container">

        <div class="row">
        @if(count($certifications)>0)
            @foreach($certifications as $certification)
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="{{Storage::url($certification->image)}}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">{{$certification->title}}</a></h5>
                <p class="card-text">{!!$certification->short_text!!}</p>
                <div class="read-more"><a href="certification/{{$certification->id}}"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          @endforeach
           @else
              <h3>OOpppss No Certifications Available 🙂🙂 </h3>
        @endif
          
         
          
        </div>

      </div>
    </section>
@endsection