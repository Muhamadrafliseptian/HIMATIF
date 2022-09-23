<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <a class="navbar-brand" href="#">
      <img src="{{ url('assets/img/logoo.png') }}" class="me-2" alt="" width="32" height="30"><b>HIMATIF</b>
    </a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Sejarah</a></li>
              <li><a href="{{ url('/') }}">Visi Misi</a></li>
              <li><a href="#">Orasi</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Program</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Study Club</a></li>
              <li><a href="#">Manajemen Asset</a></li>
              <li><a href="#">Suarakan!</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Divisi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('/divisi/bph') }}">BPH</a></li>
              <li class="dropdown"><a href="#"><span>PSDM</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="">Kaderisasi</a></li>
                  <li><a href="#">Keakrabann</a></li>
                  <li><a href="#">Manajemen Aset</a></li>
                </ul>
              </li>
               <li class="dropdown"><a href="#"><span>Riset dan Teknologi</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Ristek</a></li>
                  <li><a href="#">Kompetisi</a></li>
                  <li><a href="#">Study Club</a></li>
                </ul>
              </li>
               <li class="dropdown"><a href="#"><span>Hubungan Masyarakat</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Humas Internal</a></li>
                  <li><a href="#">Humas Eksternal</a></li>
                  <li><a href="#">Infokom</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto " href="#portfolio">Event</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Galeri</a></li>
          <li><a class="nav-link scrollto" href="#contact">Berita</a></li>
          <li><a class="nav-link scrollto" href="#contact">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>

    </div>
  </header>
