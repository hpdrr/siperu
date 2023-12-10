<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>SIPERU</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/Logo-SIF-noBg.png') }}" />
  <!-- Font Awesome icons (free version)-->
  {{-- <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script> --}}
  <script src="https://kit.fontawesome.com/f8378f43ef.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />

  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="{{ asset('assets/css/landing.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="#page-top"><img src="{{ asset('assets/img/Logo-SIF-noBg.png') }}"
          alt="Logo SIF" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars ms-1"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
          <li class="nav-item"><a class="nav-link" href="#fitur">fitur</a></li>
          <li class="nav-item"><a class="nav-link" href="#ruangan">Ruangan</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Masthead-->
  <header class="masthead">
    {{-- <span class="mask bg-gradient-dark opacity-6"></span> --}}
    <div class="container">
      <div class="masthead-subheading">Selamat Datang di</div>
      <div class="masthead-heading text-uppercase mb-1"><a href="https://www.sif.uin-suska.ac.id"
          style="text-decoration: none; color: #2776BF;">SI</a>PERU</div>
      <div class="masthead-subheading mb-5" style="font-style: normal; font-size: 1.5rem;">Sistem Informasi Peminjaman
        Ruangan</div>
      @guest
        <a class="btn btn-primary btn-xl text-uppercase" href="/login">Login</a>
      @endguest
      @auth
        <a class="btn btn-primary btn-xl text-uppercase" href="/dashboard">Dashboard</a>
      @endauth
    </div>
  </header>
  <!-- fitur-->
  <section class="page-section" id="fitur" style="background-color: #eaeaea;">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Fitur</h2>
        <h3 class="section-subheading text-muted">Fitur-fitur yang tersedia pada <span
            style="color: #2776BF;">SI</span>PERU</h3>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-solid fa-file-arrow-up fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="my-3">Pengajuan Peminjaman</h4>
          <p class="text-muted">Unggah berkas untuk persyaratan pengajuan peminjaman</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-receipt fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="my-3">Status Pengajuan Peminjaman</h4>
          <p class="text-muted">Status disetujui atau tidak disetujui akan terlihat pada SIPERU</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-calendar-days fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="my-3">Melihat Jadwal penggunaan Ruangan</h4>
          <p class="text-muted">Ruangan yang sudah terdaftar dan akan digunakan dapat dilihat pada SIPERU</p>
        </div>
      </div>
    </div>
  </section>
  <!-- ruangan Grid-->
  <section class="page-section bg-light" id="ruangan">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Ruangan</h2>
        <h3 class="section-subheading text-muted">Daftar Ruangan yang dapat dipinjam</h3>
      </div>
      <div class="row">
        @foreach ($ruangan as $ruang)
          <div class="col-lg-4 col-sm-6 mb-4">
            <div class="portfolio-item">
              <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal{{ $loop->iteration }}">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content"></div>
                </div>
                <img class="img-fluid border-radius-lg" src="{{ asset('storage/' . $ruang->image) }}"
                  alt="{{ $ruang->image }}" />
              </a>
              <div class="portfolio-caption">
                <div class="portfolio-caption-heading">{{ $ruang->nama_ruangan }}</div>
                <div class="portfolio-caption-subheading text-muted">{{ $ruang->lokasi }}</div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- About-->
  <!-- Footer-->
  <footer class="footer py-4">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-4 my-3 my-lg-0">
          <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i
              class="fab fa-twitter"></i></a>
          <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i
              class="fab fa-facebook-f"></i></a>
          <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i
              class="fab fa-linkedin-in"></i></a>
        </div>
        <div class="col-lg-4 text-lg-start">Copyright &copy; SIPERU
          <script>
            document.write(new Date().getFullYear());
          </script>
        </div>

      </div>
    </div>
  </footer>
  <!-- Portfolio Modals-->
  <!-- Portfolio item 1 modal popup-->
  @foreach ($ruangan as $ruang)
    <div class="portfolio-modal modal fade" id="portfolioModal{{ $loop->iteration }}" tabindex="-1" role="dialog"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal"><i class="fas fa-close"></i>
          </div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-6">
                <div class="modal-body">
                  <h2 class="text-uppercase">{{ $ruang->nama_ruangan }}</h2>
                  <img class="img-fluid d-block mx-auto" src="{{ asset('storage/' . $ruang->image) }}"
                    alt="{{ $ruang->nama_ruangan }}" />
                  <ul class="list-inline">
                    <li>Kapasitas:<strong>{{ $ruang->kapasitas_ruangan }}</strong></li>
                    <li>Lokasi:<strong>{{ $ruang->lokasi }}</strong></li>
                  </ul>
                  <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                    type="button">Kembali</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endforeach
  {{-- <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body">
                <!-- Project details-->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="..." />
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est
                  blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia
                  expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>
                    <strong>Client:</strong>
                    Threads
                  </li>
                  <li>
                    <strong>Category:</strong>
                    Illustration
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-xmark me-1"></i>
                  Close Project
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio item 2 modal popup-->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body">
                <!-- Project details-->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg" alt="..." />
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est
                  blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia
                  expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>
                    <strong>Client:</strong>
                    Explore
                  </li>
                  <li>
                    <strong>Category:</strong>
                    Graphic Design
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-xmark me-1"></i>
                  Close Project
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio item 3 modal popup-->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body">
                <!-- Project details-->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg" alt="..." />
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est
                  blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia
                  expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>
                    <strong>Client:</strong>
                    Finish
                  </li>
                  <li>
                    <strong>Category:</strong>
                    Identity
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-xmark me-1"></i>
                  Close Project
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio item 4 modal popup-->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body">
                <!-- Project details-->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4.jpg" alt="..." />
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est
                  blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia
                  expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>
                    <strong>Client:</strong>
                    Lines
                  </li>
                  <li>
                    <strong>Category:</strong>
                    Branding
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-xmark me-1"></i>
                  Close Project
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio item 5 modal popup-->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body">
                <!-- Project details-->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg" alt="..." />
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est
                  blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia
                  expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>
                    <strong>Client:</strong>
                    Southwest
                  </li>
                  <li>
                    <strong>Category:</strong>
                    Website Design
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-xmark me-1"></i>
                  Close Project
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio item 6 modal popup-->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" />
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="modal-body">
                <!-- Project details-->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg" alt="..." />
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est
                  blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia
                  expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>
                    <strong>Client:</strong>
                    Window
                  </li>
                  <li>
                    <strong>Category:</strong>
                    Photography
                  </li>
                </ul>
                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                  <i class="fas fa-xmark me-1"></i>
                  Close Project
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="{{ asset('assets/js/script.js') }}"></script>
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
