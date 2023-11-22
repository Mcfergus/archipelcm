@extends('frontpage.layouts.main')

@section('content')


<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">NOS OFFRES D'EMPLOI</h2>
          <p class="animate__animated animate__fadeInUp">Découvrez les offres d'emploi chez ARCHIPEL et postulez à notre mail.</p>
          
        </div>
      </div>
    </section>


    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="{{Storage::url($employments->image)}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="">{{$employments->title}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="">{{$employments->post}}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href=""><time datetime="2020-01-01">{{$employments->dateline}}/time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="">{{$employments->location}}</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                {!! $employments->description !!}
                </p>
              </div>

            </article>
            <div class="read-more mt-5">
                  <a href="{{('/emplois')}}"><button class="btn btn-primary">Back</button></a>
                </div>
         </div>
    </div>
</div>
</section>





@endsection