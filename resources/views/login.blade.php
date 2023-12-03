@extends('layouts.main')

@section('title', 'Login')
@section('container')
  <!-- Container Start -->
  <div class="container" id="screen">
    <div class="row">
      <!--row Start-->
      <div class="col-lg-6 login-image d-none d-lg-block my-auto">
        <img src="{{ asset('assets/img/login-image.png') }}" class="w-100" alt="Labor Software Engineering" />
      </div>
      <div class="col-lg-6 my-auto">
        <!--col-lg-6 Start-->
        <div id="login">
          <form action="#">
            <!-- Form Start -->
            <h4>Selamat datang di Siperu</h4>
            <p class="text-muted">Harap masuk untuk menggunakan Siperu</p>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" placeholder="Enter Email" required />
              <label for="floatingInput" class="text-muted">Nama Pengguna</label>
            </div>
            <div class="form-floating mb-2">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Enter Password" required />
              <label for="floatingPassword" class="text-muted">Kata Sandi</label>
            </div>
            <button type="submit" class="btn btn-login">Masuk</button>
          </form>
          <!-- Form End -->
        </div>
      </div>
      <!--col-lg-6 End-->
    </div>
    <!--row End-->
  </div>
  <!-- Container End-->
@endsection
