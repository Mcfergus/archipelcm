@extends('frontpage.layouts.main')

@section('content')

@if(Session::has('message'))
        <div class="alert alert-success">
          {{Session::get('message')}}
        </div>

      @endif


<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">NOS SERVICES</h2>
          <p class="animate__animated animate__fadeInUp">découvrez les services que nous offrons et exploitez les</p>
          
        </div>
      </div>
    </section>


    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>NOS SERVICES</h2>
          <p>Découvrez nos différents services et exploitez-les</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="{{asset('frontend/assets/img/features-1.svg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3>CONSEIL EN MARKETING ET COMMUNICATION</h3>
            <!-- <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
            <ul>
              <li><i class="bi bi-check"></i> Élaboration et mise en œuvre de stratégies marketing et communication.</li>
              <li><i class="bi bi-check"></i> Gestionnaire de communauté.</li>
              <li><i class="bi bi-check"></i> Conception et impression de supports de communication.</li>
            </ul>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="{{asset('frontend/assets/img/features-2.svg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>EXTERNALISATIONS SERVICE CLIENT</h3>
            <!-- <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
            <p>
            ARCHIPEL gère le service client de votre entreprise. Emission et réception d'appels a travers du conseil et de la prise de rendez-vous pour vos commerciaux au sein de son Call Center.
            </p>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="{{asset('frontend/assets/img/features-3.svg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5">
            <h3>EVENEMENTIEL</h3>
            <!-- <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p> -->
            <ul>
              <li><i class="bi bi-check"></i> Organisation et gestion de vos événements adaptés à vos besoins.</li>
              <li><i class="bi bi-check"></i> Mise à disposition d'hôtes/hôtesses et de brand girls qualifiées.</li>
              
            </ul>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="{{asset('frontend/assets/img/features-4.svg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>RECYCLAGE DU PERSONNEL EN RELATION CLIENT ET ASSISTANAT</h3>
            <!-- <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
            <p>
            ARCHIPEL CM agréé par le MINEFOP recycle ses candidats expérimentés aux métiers de la Relation Client et les insère auprès d'entreprises partenaires
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->
@endsection