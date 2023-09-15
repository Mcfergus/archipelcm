@extends('frontpage.layouts.main')

@section('content')


<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">OUR JOB OFFERS</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          
        </div>
      </div>
    </section>


    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">
            @if(count($employments)>0)
            @foreach($employments as $employment)

          <div class="col-lg-8 entries">

            <article class="entry">

              <div class="entry-img">
                <img src="{{Storage::url($employment->image)}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="">{{$employment->title}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="">{{$employment->post}}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href=""><time datetime="">{{$employment->dateline}}</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="">{{$employment->location}}</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                {!!Str::limit($employment->description, 250)!!}
                </p>
                <div class="read-more">
                  <a href="emplois/{{$employment->id}}">Read More</a>
                </div>
              </div>

            </article>
       </div>
      @endforeach
      @else
              <h3>OOpppss No Job Offers Available 🙂🙂 </h3>
        @endif
   </div>
</div>
</section>


<section class="facts section-bg" data-aos="fade-up">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-12 col-12 text-center">
            <h4>Interested in our offers? Send us your CV and Cover Letter</h4>
            
              <a href="mailto:mindbyarchipel@gmail.com"><button class="btn btn-outline-info mt-3" type="submit">Send</button></a>
            
          </div>

        </div>

      </div>
    </section>
@endsection