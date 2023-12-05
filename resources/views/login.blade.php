@extends('layouts.signin')

@section('title', 'Login')

<body class="bg-gray-200">
  @section('container')
    <main class="main-content mt-0">
      {{-- Setting background Start --}}
      <div class="page-header align-items-start min-vh-100"
        style="
            background-image: url('{{ asset('assets/img/backgrounds/labor SE.jpg') }}');
          ">
        <span class="mask bg-gradient-dark opacity-6"></span>
        {{-- Setting background End --}}

        <div class="container my-auto">
          <div class="row">
            <div class="col-lg-4 col-md-8 col-12 mx-auto">
              <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                    <h1 class="text-center text-white"><i class="fa-regular fa-circle-user"></i></h1>
                    <div class="row mt-3">
                      <h4 class="text-white font-weight-bolder text-center mb-2">
                        Peminjaman Ruangan
                      </h4>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <form role="form" class="text-start">
                    <div class="form-floating input-group input-group-outline my-3">
                      <input type="email" class="form-control" id="floatingInput" placeholder="Username" />
                      <label for="floatingInput" class="ps-3">Username</label>
                    </div>
                    <div class="form-floating input-group input-group-outline mb-3">
                      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" />
                      <label for="floatingPassword" class="ps-3">Password</label>
                    </div>
                    <div class="form-check form-switch d-flex align-items-center mb-3">
                      <input class="form-check-input" type="checkbox" id="rememberMe" checked />
                      <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                    </div>
                    <div class="text-center">
                      <button type="button" class="btn bg-gradient-primary w-100 my-4 mb-2">
                        Sign in
                      </button>
                    </div>
                    <p class="mt-4 text-sm text-center">
                      Don't have an account?
                      <a href="../pages/sign-up.html" class="text-primary text-gradient font-weight-bold">Sign up</a>
                    </p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  @endsection
  @section('script')
    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
      let win = navigator.platform.indexOf("Win") > -1;
      if (win && document.querySelector("#sidenav-scrollbar")) {
        let options = {
          damping: "0.5",
        };
        Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
      }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/js/material-dashboard.min.js?v=3.1.0') }}"></script>
  @endsection
</body>
