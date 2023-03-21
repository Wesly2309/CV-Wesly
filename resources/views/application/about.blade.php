@extends('layouts.app')

@section('title', 'About')

@section('about')
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About</h2>
        <p>Hello, My name is Wesly. I'm a college student in Batam International University and I'm currently majoring in Information System.</p>
     <blockquote>"Always look forward and do your Best"</blockquote> 
    </div>

      <div class="row">
        <div class="col-lg-4">
          <img src="assets/img/weslylim.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content">
          <h3>The Designer &amp; The Developer.</h3>
          <p class="fst-italic">
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>23 September 2004</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+6281265575890</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Indonesia</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>18</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>None</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>wesly2309@gmail.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Unavailable</span></li>
              </ul>
            </div>
          </div>
          This is the Curriculum Vitae about Me
        </p>
        </div>
      </div>

    </div>
  </section>
@endsection
