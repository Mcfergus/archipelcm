@extends('frontpage.layouts.main')

@section('content')
<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">BIENVENU A VOTRE ESPACE ETUDIANT</h2>
          <p class="animate__animated animate__fadeInUp"></p>
          <!-- <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a> -->
        </div>
      </div>

      <!-- Slide 2 -->
      <!-- <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">FORMEZ-VOUS CHEZ NOUS</h2>
          <p class="animate__animated animate__fadeInUp">choisissez de travailler avec nous pour rester à la pointe de l'actualité et les plus compétitifs du marché, mettre en valeur vos compétences, bénéficier et saisir les opportunités d'emploi de nos partenaires</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div> -->

      <!-- Slide 3 -->
      <!-- <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">DEVENEZ PARTENAIRE AVEC NOUS</h2>
          <p class="animate__animated animate__fadeInUp">faites-nous confiance pour obtenir les meilleurs profils et personnels de travail pour votre entreprise et vous servir avec un service de qualité pour une meilleure expérience.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div> -->

      <!-- <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a> -->

    </div>
  </section><!-- End Hero -->



  <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="{{asset('frontend/assets/img/lesson.jpg')}}" class="img-fluid" alt="">
            <a href="https://youtu.be/oPbZfyCfNRc?si=5V2DFLayteAnwZYw" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href=""><strong>LESSON</strong></a></h4>
              <p class="description">Cette video es votre lesson du jour sur le sujet .. et qui serai disponible jusqu'au .. et apres cela vous serez evaluer par un quiz.
                 en cliquant sur le lien, vous serez 
                diriger a cette lesson ..
              </p>
            </div>

            <!-- <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div> -->

          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->
@endsection