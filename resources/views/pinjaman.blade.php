@extends('layouts.main')

@section('title', 'Daftar Peminjaman')
@section('pinjaman-active', 'active bg-gradient-primary')

@section('container')
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Daftar Peminjam Ruangan</h6>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-l font-weight-bolder opacity-7">No</th>
                <th class="text-uppercase text-secondary text-l font-weight-bolder opacity-7">Kode Peminjaman</th>
                <th class="text-uppercase text-secondary text-l font-weight-bolder opacity-7 ps-2">Ruangan
                </th>
                <th class="text-center text-uppercase text-secondary text-l font-weight-bolder opacity-7">
                  Peminjam</th>
                <th class="text-center text-uppercase text-secondary text-l font-weight-bolder opacity-7">
                  Keperluan</th>
                <th class="text-center text-uppercase text-secondary text-l font-weight-bolder opacity-7">
                  Tanggal</th>
                <th class="text-center text-uppercase text-secondary text-l font-weight-bolder opacity-7">
                  Berkas</th>
                <th class="text-secondary opacity-7"></th>
              </tr>
            </thead>

            <tbody>
              @foreach ($pinjaman as $pinjam)
                <tr>
                  <td class="text-center text-secondary text-sm font-weight-bold">
                    {{ $loop->iteration }}
                  </td>
                  <td class="text-secondary text-center text-m font-weight-bold ps-3">
                    {{ $pinjam->kode_peminjaman }}
                  </td>
                  <td class="align-middle text-center text-secondary text-sm font-weight-bold">
                    {{ $pinjam->kode_ruangan }}
                  </td>
                  <td class="align-middle text-secondary text-m">
                    {{ $pinjam->user_id }}
                  </td>
                  <td class="align-middle text-secondary text-m">
                    {{ $pinjam->keperluan }}
                  </td>
                  <td class="align-middle text-secondary text-m">
                    {{ $pinjam->mulai_pinjam }}
                  </td>
                  <td class="align-middle text-secondary text-m">
                    <a href="{{ asset('storage/rundowns' . $pinjam->rundown) }}">unduh</a>
                  </td>
                  <td class="align-middle">
                    <button class="btn btn-danger">
                      <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                        data-original-title="Edit user">
                        <i class="material-icons outline text-white">close</i>
                      </a>
                    </button>
                    <button class="btn btn-success">
                      <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                        data-original-title="Edit user">
                        <i class="material-icons outline text-white">done</i>
                      </a>
                    </button>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('scripts')
  <!--   Core JS Files   -->
  {{-- <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script> --}}
  {{-- <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script> --}}
@endsection
</body>

</html>
