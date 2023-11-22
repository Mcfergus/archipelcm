@extends('frontpage.layouts.main')

@section('content')


<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">NOS FORMATIONS</h2>
          <p class="animate__animated animate__fadeInUp">découvrez les formations que nous offrons et formez vous chez nous</p>
          
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
              <h3>OOppps PAS DE FORMATIONS DISPONIBLE 🙂🙂 </h3>
        @endif
          
         
          
        </div>

      </div>
    </section>


    <section class="facts section-bg" data-aos="fade-up">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-12 col-12 text-center">
            <h4>Intéressé par nos formations ? Envoyez-nous un message avec objet "Je M'inscris" et Avec votre Nom, Localisation, occupation et Numero de telephone en message en cliquant sur le bouton ci-dessous👇</h4>
            
              <a href="{{('contact')}}"><button class="btn btn-outline-info mt-3" type="submit">Send</button></a>
            
          </div>

        </div>

      </div>
    </section>
@endsection