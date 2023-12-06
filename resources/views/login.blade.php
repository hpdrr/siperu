@extends('layouts.signin')

{{-- @section('title', 'Login') --}}

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
                  {{-- flashing start --}}
                  @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" style="z-index: 99" role="alert">
                      {{ session('success') }}
                      <button type="button" class="btn-close material-icons" data-bs-dismiss="alert"
                        aria-label="Close">close</button>
                    </div>
                  @endif
                  {{-- flashin end --}}
                  <form role="form" class="text-start">
                    <div class="form-floating input-group input-group-outline my-3">
                      <input type="email" name="nim" class="form-control" id="nim" placeholder="nim" />
                      <label for="nim" class="ps-3">nim</label>
                    </div>
                    <div class="form-floating input-group input-group-outline mb-3">
                      <input type="password" name="password" class="form-control" id="password" placeholder="Password" />
                      <label for="password" class="ps-3">Password</label>
                    </div>
                    <div class="form-check form-switch d-flex align-items-center mb-3">
                      <input class="form-check-input" type="checkbox" id="rememberMe" />
                      <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">
                        Masuk
                      </button>
                    </div>
                    <p class="mt-4 text-sm text-center">
                      Belum punya akun?
                      <a href="/register" class="text-primary text-gradient font-weight-bold">Daftar</a>
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
  @endsection
</body>
