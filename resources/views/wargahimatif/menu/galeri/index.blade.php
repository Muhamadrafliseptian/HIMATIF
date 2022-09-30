@extends('wargahimatif.app')

@section('title', 'GALERI')

@section('content')
<section class="section site-portfolio">
      <div class="container">
      <div class="row justify-content-center text-center mb-4">
          <div class="col-5">
            <h3 class="h3 heading">Foto Kegiatan</h3>
            <p>Himpunan Mahasiswa Teknik Informatika Politeknik Negeri Indramayu.</p>
          </div>
        </div>
        <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
          <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.html" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Expo</h3>
                <span>Tahun 2021</span>
              </div>
              <img class="img-fluid" src="assets/img/img_1.jpg">
            </a>
          </div>
          <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.html" class="item-wrap fancybox">
              <div class="work-info">
                <h3>IT Cast</h3>
                <span>Kegiatan 2021</span>
              </div>
              <img class="img-fluid" src="assets/img/img_2.jpg">
            </a>
          </div>
          <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.html" class="item-wrap fancybox">
              <div class="work-info">
                <h3>LKMMD Angkatan 13</h3>
                <span>Kegiatan 2020</span>
              </div>
              <img class="img-fluid" src="assets/img/img_3.jpg">
            </a>
          </div>
          <div class="item design col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.html" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Nike Shoe</h3>
                <span>Design</span>
              </div>
              <img class="img-fluid" src="assets/img/img_4.jpg">
            </a>
          </div>
          <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.html" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Kitchen Sink</h3>
                <span>Photography</span>
              </div>
              <img class="img-fluid" src="assets/img/img_5.jpg">
            </a>
          </div>
          <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.html" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Amazon</h3>
                <span>brandingn</span>
              </div>
              <img class="img-fluid" src="assets/img/img_6.jpg">
            </a>
          </div>
        </div>
      </div>
    </section>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection
