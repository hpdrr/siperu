@extends('layouts.signin')

@section('container')

  <body>
    <main class="main-content mt-0">
      <section>
        <div class="page-header min-vh-100">
          <div class="container">
            <div class="row">
              <div
                class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                <div
                  class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center"
                  style="
                    background-image: url('{{ asset('assets/img/backgrounds/labor SE.jpg') }}');
                    background-size: cover;
                    background-position: center top;
                  ">
                  <span class="mask bg-gradient-dark opacity-5 border-radius-lg"></span>

                </div>
              </div>
              <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                <div class="card">
                  <div class="card-header">
                    <h4 class="font-weight-bolder">Daftar</h4>
                    <p class="mb-0">
                      Masukkan NIM dan Password untuk mendaftar
                    </p>
                  </div>
                  <div class="card-body mt-0 form-registration">
                    <form action="/register" method="POST">
                      @csrf
                      <div class="form-floating my-3 input-group input-group-outline">
                        <input type="text" name="nama" maxlength="11"
                          class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="nama"
                          required value="{{ old('nama') }}" />
                        <label for="nama" class="ps-3">nama</label>
                        @error('nama')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                      <div class="form-floating my-3 input-group input-group-outline">
                        <input type="text" name="nim" maxlength="11"
                          class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Nim"
                          required value="{{ old('nim') }}" onkeypress="return onlyNumberKey(event)" />
                        <label for="nim" class="ps-3">Nim</label>
                        @error('nim')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                      <div class="form-floating input-group input-group-outline">
                        <input type="password" name="password"
                          class="form-control @error('password') is-invalid @enderror" id="password"
                          placeholder="Password" required value />
                        <label for="password" class="ps-3">Password</label>
                        @error('password')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">
                          Daftar
                        </button>
                      </div>
                    </form>
                  </div>
                  <div class="card-footer text-center pt-0 px-lg-2 px-1">
                    <p class="mb-2 text-sm mx-auto">
                      Sudah punya akun?
                      <a href="/login" class="text-primary text-gradient font-weight-bold">Masuk</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!--   Core JS Files   -->
    {{-- <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script> --}}
    <script>
      var win = navigator.platform.indexOf("Win") > -1;
      if (win && document.querySelector("#sidenav-scrollbar")) {
        var options = {
          damping: "0.5",
        };
        Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
      }

      function onlyNumberKey(evt) {
        // Only ASCII character in that range allowed
        let ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
          return false;
        return true;
      }
    </script>
  </body>
@endsection
