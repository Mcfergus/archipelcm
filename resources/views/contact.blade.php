@extends('frontpage.layouts.main')

@section('content')




<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Contact Us</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          
        </div>
      </div>
    </section>


    <main id="main">
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Diedo, Face Pharmacie King Diedo</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>mindbyarchipel@gmail.com<br>archipelcm@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+237 656 14 43 63<br>+237 654 33 01 57</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

          @if(Session::has('message'))
        <div class="alert alert-success">
          {{Session::get('message')}}
        </div>

      @endif
            <form action="{{route('contact.store')}}" method="POST" enctype="multipart/form-data">@csrf
              
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  @if($errors->has('name'))
                   <span class="text-danger">{{ $errors->first('name') }}</span>
                  @endif 
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  @if($errors->has('email'))
                   <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif 
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                @if($errors->has('subject'))
                   <span class="text-danger">{{ $errors->first('subject') }}</span>
                  @endif 
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                @if($errors->has('message'))
                   <span class="text-danger">{{ $errors->first('message') }}</span>
                  @endif 
              </div>
             
              <div class="text-center mt-3"><button class="btn btn-success" type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
    <section class="map mt-2">
      <div class="container-fluid p-0">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15919.08875139594!2d9.697108856294195!3d4.066789470274081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1061127209293a0d%3A0x30c65e40f783d6f5!2sPHARMACIE%20KING-%20DEIDO%2C%20Douala!5e0!3m2!1sen!2scm!4v1694643672209!5m2!1sen!2scm" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section><!-- End Map Section -->

  </main><!-- End #main -->
@endsection