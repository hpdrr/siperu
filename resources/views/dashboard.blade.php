@extends('layouts.main')

@section('title', 'Dashboard')
@section('dashboard-active', 'active bg-gradient-primary')
@section('container')
  {{-- Start Dashboard Card --}}
  <div class="col-xl-4 col-md-4 col-sm-12 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-header p-3 pt-2">
        <div
          class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
          <i class="material-icons opacity-10">meeting_room</i>
        </div>
        <div class="text-end pt-1">
          <p class="text-sm mb-0 text-capitalize">Total Ruangan</p>
          <h4 class="mb-0">{{ $jumlah_ruangan }}</h4>
        </div>
      </div>
      <hr class="dark horizontal my-0" />
      <div class="card-footer p-3">
        <a href="/dashboard/ruangan">
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
          <i class="material-icons opacity-10">pending</i>
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
  {{-- End Dashboard Card --}}
  <div class="row">
    <div class="col-lg-12 col-md-6 mt-4 mb-4">
      <div class="card z-index-2">
        <div class="card-body">
          <h1 class="mb-0">Selamat Pagi, {{ ucfirst(auth()->user()->nama) }}</h1>
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

  {{-- Start Footer --}}
  {{-- end Footer --}}
@endsection
@section('script')
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
