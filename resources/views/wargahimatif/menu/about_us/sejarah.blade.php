@extends('wargahimatif.app')

@section('title', 'SEJARAH')

@section('content')
 <!-- ======= sejarah Section ======= -->
      <section id="sejarah" class="sejarah mt-5">
        <div class="container" data-aos="fade-up">
             <div class="section-title" data-aos="fade-up">
          <h2>Sejarah</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus nisi consequuntur expedita culpa accusamus quo laboriosam quaerat debitis, ipsa dolor nesciunt molestias vitae doloremque esse odit in fugiat labore voluptates.</p>
        </div>
          <div class="row gx-0">
            <div
              class="col-lg-6 d-flex flex-column justify-content-center"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="content">
                <h3>Himpunan Mahasiswa Teknik Informatika</h3>
                <h2>
                  Expedita voluptas omnis cupiditate totam eveniet nobis sint
                  iste. Dolores est repellat corrupti reprehenderit.
                </h2>
                <p>
                  Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt
                  et. Inventore et et dolor consequatur itaque ut voluptate sed
                  et. Magnam nam ipsum tenetur suscipit voluptatum nam et est
                  corrupti.
                </p>
                <div class="text-center text-lg-start">
                  <a
                    href="#drop"
                    class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center"
                  >
                    <span>Baca Lebih Lanjut</span>
                    <i class="bi bi-arrow-down"></i>
                  </a>
                </div>
              </div>
            </div>

            <div
              class="col-lg-6 d-flex align-items-center"
              data-aos="zoom-out"
              data-aos-delay="200"
            >
              <img src="{{ asset('assets/img/services.png') }}" class="img-fluid" alt="" />
            </div>
          </div>
        </div>
      </section>
       <section id="sejarah" class="sejarah">
        <div class="container" id="drop" data-aos="fade-up">
             <div class="section-title" data-aos="fade-up">
          <h2>Sejarah</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus nisi consequuntur expedita culpa accusamus quo laboriosam quaerat debitis, ipsa dolor nesciunt molestias vitae doloremque esse odit in fugiat labore voluptates.</p>
        </div>
          <div class="row gx-0">
             <div
              class="col-lg-6 d-flex align-items-center"
              data-aos="zoom-out"
              data-aos-delay="200"
            >
              <img src="{{ asset('assets/img/services.png') }}" class="img-fluid" alt="" />
            </div>
            <div
              class="col-lg-6 d-flex flex-column justify-content-center"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="content">
                <h3>Himpunan Mahasiswa Teknik Informatika</h3>
                <h2>
                  Expedita voluptas omnis cupiditate totam eveniet nobis sint
                  iste. Dolores est repellat corrupti reprehenderit.
                </h2>
                <p>
                  Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt
                  et. Inventore et et dolor consequatur itaque ut voluptate sed
                  et. Magnam nam ipsum tenetur suscipit voluptatum nam et est
                  corrupti.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection
