@extends('wargahimatif.app')

@section('title', 'STUDY CLUB')

@section('content')
<section id="sejarah" class="sejarah mt-5">
<div class="container">
    <div class="section-title" data-aos="fade-up">
          <h2>Pustaka Study Club</h2>
          <p>Merupakan tempat untuk mendapatkan modul pembelajaran Study Club</p>
        </div>
<div class="row row-cols-0 row-cols-md-4 g-5">
   <div class="col" data-aos="fade-left">
    <div class="card w-100 h-100">
      <img src="{{ asset('assets/img/services.png') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">OOP Java</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <div class="text-center">
        <a href="{{ asset('assets/testPDF/modul.pdf') }}" class="btn btn-sm btn-dark text-center w-100">Download</a>
        </div>
      </div>
    </div>
  </div>
   <div class="col" data-aos="fade-left">
    <div class="card w-100 h-100">
      <img src="{{ asset('assets/img/services.png') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">OOP Java</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <div class="text-center">
        <a href="{{ asset('assets/testPDF/modul.pdf') }}" class="btn btn-sm btn-dark text-center w-100">Download</a>
        </div>
      </div>
    </div>
  </div>
  <div class="col" data-aos="fade-right">
    <div class="card w-100 h-100">
      <img src="{{ asset('assets/img/services.png') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">OOP Java</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <div class="text-center">
        <a href="{{ asset('assets/testPDF/modul.pdf') }}" class="btn btn-sm btn-dark text-center w-100">Download</a>
        </div>
      </div>
    </div>
  </div>
   <div class="col" data-aos="fade-right">
    <div class="card w-100 h-100">
      <img src="{{ asset('assets/img/services.png') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">OOP Java</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <div class="text-center">
        <a href="{{ asset('assets/testPDF/modul.pdf') }}" class="btn btn-sm btn-dark text-center w-100">Download</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>
@endsection
