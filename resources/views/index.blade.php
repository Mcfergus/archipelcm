@extends('frontpage.layouts.main')

@section('content')
<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">WELCOME TO <span>MINDBYARCHIPEL</span></h2>
          <p class="animate__animated animate__fadeInUp">Bienvenue chez nous, c'est ici que nous vous servons avec la meilleure qualité de service. Faites-nous confiance et laissez-nous nous occuper du reste.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">FORMEZ-VOUS CHEZ NOUS</h2>
          <p class="animate__animated animate__fadeInUp">choisissez de travailler avec nous pour rester à la pointe de l'actualité et les plus compétitifs du marché, mettre en valeur vos compétences, bénéficier et saisir les opportunités d'emploi de nos partenaires</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">DEVENEZ PARTENAIRE AVEC NOUS</h2>
          <p class="animate__animated animate__fadeInUp">faites-nous confiance pour obtenir les meilleurs profils et personnels de travail pour votre entreprise et vous servir avec un service de qualité pour une meilleure expérience.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Qualite</a></h4>
              <p class="description">La qualité est le reflet de notre engagement envers nos clients et de notre réputation sur le marché.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Pro-activite</a></h4>
              <p class="description">En faisant preuve de proactivité dans la gestion de projets et d’initiatives, nous ouvrons la voie à une croissance et à une prospérité à long terme.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Audace</a></h4>
              <p class="description">Inspirés par l'audace, nous conquérons des territoires inexplorés, défiant les pronostics et favorisant une détermination sans faille.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Creativite</a></h4>
              <p class="description">Favoriser la créativité dans la société non seulement suscite des esprits innovants, mais favorise également un environnement prospère pour la croissance.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="{{asset('frontend/assets/img/why-us.jpeg')}}" class="img-fluid" alt="">
            <a href="https://youtube.com/shorts/q_sN0Y9q2cE?feature=share" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href=""><strong>MIND BY ARCHIPEL</strong></a></h4>
              <p class="description"><strong>MIND BY ARCHIPEL</strong> est une entreprise spécialisée dans la mise en relation des chercheurs d’emplois, des entreprises et des proféssionnels. Nous accompagnons notre clientèle à développer son effort et son champ de contact à travers nos bases de données.
                 Accédez à nos différents services en visitant notre site!
                  Élargissons notre réseau et nous atteindrons ensemble la partie cachée de l’ICEBERG.
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

  </main>

  @endsection