@extends('layouts.main')

@section('title', 'Dashboard')

<body class="g-sidenav-show bg-gray-200">
  @section('container')
    <aside
      class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark"
      id="sidenav-main">
      <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
          aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
          target="_blank">
          <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo" />
          <span class="ms-1 font-weight-bold text-white">Siperu</span>
        </a>
      </div>
      <hr class="horizontal light mt-0 mb-2" />
      <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white active bg-gradient-primary" href="../pages/dashboard.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">dashboard</i>
              </div>
              <span class="nav-link-text ms-1">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/tables.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">description</i>
              </div>
              <span class="nav-link-text ms-1">Tables</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/billing.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">room</i>
              </div>
              <span class="nav-link-text ms-1">Ruangan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/virtual-reality.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">view_in_ar</i>
              </div>
              <span class="nav-link-text ms-1">Virtual Reality</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/rtl.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
              </div>
              <span class="nav-link-text ms-1">RTL</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/notifications.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">notifications</i>
              </div>
              <span class="nav-link-text ms-1">Notifications</span>
            </a>
          </li>
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">
              Account pages
            </h6>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/profile.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person</i>
              </div>
              <span class="nav-link-text ms-1">Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/sign-in.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">login</i>
              </div>
              <span class="nav-link-text ms-1">Sign Out</span>
            </a>
          </li>
        </ul>
      </div>
      </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
      <!-- Navbar -->
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        data-scroll="true">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm">
                <a class="opacity-5 text-dark" href="javascript:;">Pages</a>
              </li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
                Dashboard
              </li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Dashboard</h6>
          </nav>
          <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
              <div class="input-group input-group-outline">
                <label class="form-label">Type here...</label>
                <input type="text" class="form-control" />
              </div>
            </div>
            <ul class="navbar-nav justify-content-end">
              <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </a>
              </li>
              <li class="nav-item px-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0">
                  <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                </a>
              </li>
              <li class="nav-item d-flex align-items-center">
                <a href="../pages/sign-in.html" class="nav-link text-body font-weight-bold px-0">
                  <i class="fa fa-user me-sm-1"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="container-fluid py-4">
        {{-- Start Dashboard Card --}}
        <div class="row">
          <div class="col-xl-4 col-md-4 col-sm-12 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div
                  class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                  <i class="fa-solid fa-building opacity-10"></i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Total Ruangan</p>
                  <h4 class="mb-0">7</h4>
                </div>
              </div>
              <hr class="dark horizontal my-0" />
              <div class="card-footer p-3">
                <a href="#">
                  <p class="mb-0">Lihat detail <i class="fa-solid fa-up-right-from-square"></i></p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-4 col-sm-12 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div
                  class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">person</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Peminjaman</p>
                  <h4 class="mb-0">20</h4>
                </div>
              </div>
              <hr class="dark horizontal my-0" />
              <div class="card-footer p-3">
                <a href="#">
                  <p class="mb-0">Lihat detail <i class="fa-solid fa-up-right-from-square"></i></p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-4 col-sm-12">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div
                  class="icon icon-lg icon-shape bg-gradient-warning shadow-info text-center border-radius-xl mt-n4 position-absolute">
                  <i class="fa-solid fa-exclamation opacity-10"></i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Menunggu Persetujuan</p>
                  <h4 class="mb-0">9</h4>
                </div>
              </div>
              <hr class="dark horizontal my-0" />
              <div class="card-footer p-3">
                <a href="#">
                  <p class="mb-0">Lihat detail <i class="fa-solid fa-up-right-from-square"></i></p>
                </a>
              </div>
            </div>
          </div>
        </div>
        {{-- End Dashboard Card --}}
        <div class="row">
          <div class="col-lg-12 col-md-6 mt-4 mb-4">
            <div class="card z-index-2">
              <div class="card-body">
                <h1 class="mb-0">Selamat Pagi, Administrator</h1>
                <p class="text-sm">Last Campaign Performance</p>
                <hr class="dark horizontal" />
                <div class="d-flex">
                  <i class="material-icons text-sm my-auto me-1">schedule</i>
                  <p class="mb-0 text-sm">campaign sent 2 days ago</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- Start Footer --}}
      <footer class="footer py-4">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                SIperu ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
              </div>
            </div>
          </div>
        </div>
      </footer>
      {{-- Start Footer --}}
    </main>
  @endsection
  @section('script')
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <script>
      var win = navigator.platform.indexOf("Win") > -1;
      if (win && document.querySelector("#sidenav-scrollbar")) {
        var options = {
          damping: "0.5",
        };
        Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
      }
    </script>
  @endsection
</body>
