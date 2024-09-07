@extends('template.index')
@section('content')

    <!-- About Section -->
    <section id="about" class="about section" >

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><a href="http://127.0.0.1:8000/about.html" class="about section">About us</a></h2>
        <p>About Us<br></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>

            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>Product</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>category</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>The most beautiful travel in the world</span></li>
            </ul>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p>Welcome to Randonne, your ultimate destination for discovering and booking unforgettable hiking experiences. Our platform was born out of a passion for exploring the great outdoors and a desire to make nature's wonders accessible to everyone. Whether you’re an experienced hiker or a beginner, Randonne is here to guide you on your next adventure.</p>

            <a href="http://127.0.0.1:8000/about.html" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

@endsection
