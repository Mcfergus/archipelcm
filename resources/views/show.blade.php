@extends('frontpage.layouts.main')

@section('content')


<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">NOS FORMATIONS</h2>
          <p class="animate__animated animate__fadeInUp">découvrez les formations que nous offrons et formez vous chez nous.</p>
          
        </div>
      </div>
    </section>



    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="{{Storage::url($certifications->image)}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="">{{$certifications->title}}</a>
              </h2>

              <div class="entry-meta">
                <p>Duration: {{$certifications->duration}}</p>
              </div>

              <div class="entry-content">
                <p>
                {!! $certifications->description !!}
                </p>
              </div>

            </article>
            <div class="read-more mt-5">
            <a href="{{('/certifications')}}"><button class="btn btn-primary">Back</button></a>
                </div>
         </div>
    </div>
</div>
</section>

@endsection