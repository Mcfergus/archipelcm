@extends('frontpage.layouts.main')

@section('content')


<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">A PROPOS D'ARCHIPEL</h2>
          <p class="animate__animated animate__fadeInUp"> sachez qui nous sommes et ce que nous faisons</p>
          
        </div>
      </div>
    </section>


    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="{{asset('frontend/assets/img/blog/blog-2.jpeg')}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">QUI SOMMES NOUS?</a>
              </h2>

              

              <div class="entry-content">
                <p>
                  <strong>ARCHIPEL CM</strong>: Un centre d’appel pour développer le lien entre l’entreprise et les clients potentiels ou prospects afin de les aider à booster leur chiffre d’affaires par le 
                  <strong>télémarketing : télé conseillers, téléacteurs, télévendeurs (prise de RDV, émission d’appels, vente de produits, étude de marché)</strong>.
                   <strong>ARCHIPEL</strong> c’est aussi du marketing terrain : Une équipe dynamique afin de vous accompagner dans vos démarches <strong>communicationnelles et marketing (mise à disposition des commerciaux qualifiés adaptés et déterminés à tous secteurs d’activités, étude de marché, ventes de produits et services)</strong>. 
                   <strong>Communication : Evénementiel et hôtellerie Organisation d’événements, hôtesses présentables éloquentes et maîtrisant toutes les techniques d’accueil, personnel hôtelier, hébergements Communication d’entreprise Mailing, communication par les réseaux sociaux, vente de fichiers, promotion diverses, conseils en image</strong>.
                </p>

                <p>
                <strong>ARCHIPEL CM</strong> est une société holding créée en 2010 spécialisée dans la <strong>prestation de services et d'expérience client</strong> au niveau national et international, agréé par le <b>MINFOP AGREMENT N° 259/MINEFOP/SG/DFOP/SDGSF/ SACD DU 01 AOÛT 2014</b>.
                </p>

                <p>
                   <strong> ARCHIPEL CM </strong> a crée en 2012 le premiere cabinet de Formation spécialisé en <strong>Télémarketing </strong>, <strong>Marketing</strong> et <strong>Assistanat</strong> agréée par le MINEFOP qui forme et insère les <strong>chercheurs d'emploi</strong> auprès des entreprises partenaires et recycle le personnel des entreprises.
                </p>

                <blockquote>
                  <p>
                    Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam doloribus minus autem quos.
                  </p>
                </blockquote>


                <h3>QUI A FONDÉ ARCHIPEL CM?</h3>
                <p>
                   <strong>ARCHIPEL CM</strong> a pour fondatrice et dirigeant <strong> Mme TOBBO EYOUM INGRID </strong>
                   qui a fait des hautes études en communication en France et qui a une expérience professionnelle dans le secteur du Marketing et la communication.
                    Après avoir travaillé pour plusieurs entreprises de renommée comme Canal +, Citroën, Air France etc.…. au service Marketing, précisément en télémarketing,
                     <strong>Mme Tobbo Eyoum</strong> à poursuivit son évolution professionnelle en acquérant de l’expérience en tant qu’Attachée de presse pour le Groupe SEB et enfin en tant que Chargée de Communication pour le Magazine Média CE qui est le premier magazine spécialisé pour les Comités d’Entreprise en France qui a été un tremplin pour la création du Pole Marketing et Communication d’ ARCHIPEL.
                </p>
                <img src="{{asset('frontend/assets/img/blog/blog-3.jpeg')}}" class="img-fluid" alt="">

                <h3>QUELS SONT LES SERVICES QU'OFFRES ARCHIPEL?.</h3>
                <p>
                  Les services offerts par l'archipel sont:
                </p>
                <ul>
                   <li><i class="bi bi-check"></i> <strong>CONSEIL EN MARKETING ET COMMUNICATION</strong></li>
                   <li><i class="bi bi-check"></i> <strong>EXTERNALISATIONS SERVICE CLIENT</strong> </li>
                   <li><i class="bi bi-check"></i> <strong>EVENEMENTIEL</strong> </li>
                   <li><i class="bi bi-check"></i> <strong>RECYCLAGE DU PERSONNEL EN RELATION CLIENT ET ASSISTANAT</strong> </li>
              
                 </ul>
                

              </div>

              

            </article>
</div>
   </div>
 </div>
</section>

<section class="facts section-bg" data-aos="fade-up">
      <div class="container">
          
          
          <div class="row counters">
          <div class="col-lg-12 col-12 text-center mb-5">
            <h3>NOS PARTENAIRES</h3>
          </div>

          <div class="col-lg-2 col-6 text-center">
            <img src="{{asset('frontend/assets/img/kalitys.jpg')}}" alt="" width="80">
          </div>

          <div class="col-lg-2 col-6 text-center">
            <img src="{{asset('frontend/assets/img/zenith.png')}}" alt="" width="80">
          </div>

          <div class="col-lg-2 col-6 text-center">
          <img src="{{asset('frontend/assets/img/rural.png')}}" alt="" width="80">
          </div>

          <div class="col-lg-2 col-6 text-center">
          <img src="{{asset('frontend/assets/img/gms.png')}}" alt="" width="80">
          </div>

          <div class="col-lg-2 col-6 text-center">
          <img src="{{asset('frontend/assets/img/ease.jpg')}}" alt="" width="80">
          </div>

          <div class="col-lg-2 col-6 text-center">
          <img src="{{asset('frontend/assets/img/intelcia.jpg')}}" alt="" width="80">
          </div>

        </div>

      </div>
    </section>


    <section class="testimonials" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Témoignages</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-carousel swiper">
          <div class="swiper-wrapper">
            <div class="testimonial-item swiper-slide">
              <img src="{{asset('frontend/assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item swiper-slide">
              <img src="{{asset('frontend/assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item swiper-slide">
              <img src="{{asset('frontend/assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item swiper-slide">
              <img src="{{asset('frontend/assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item swiper-slide">
              <img src="{{asset('frontend/assets/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>


    
@endsection