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
      <div class="card-body px-0 pb-2 me-3">
        <div class="row justify-content-end">
          <div class="col-md-4">
            <form action="" method="GET">
              <div class="input-group mb-3">
                <input type="text" class="form-control ps-2 border rounded-end-0" placeholder="Cari" name="search">
                <button class="btn btn-primary shadow-none border mb-0 material-icons" type="submit"
                  id="button-addon2">search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-l font-weight-bolder opacity-7">No</th>
                <th class="text-uppercase text-secondary text-l font-weight-bolder opacity-7">Kode</th>
                <th class="text-uppercase text-secondary text-l font-weight-bolder opacity-7 ps-2">Ruangan
                </th>
                <th class="text-center text-uppercase text-secondary text-l font-weight-bolder opacity-7">
                  Peminjam</th>
                <th class="text-center text-uppercase text-secondary text-l font-weight-bolder opacity-7">
                  Agenda</th>
                <th class="text-center text-uppercase text-secondary text-l font-weight-bolder opacity-7">
                  Tanggal</th>
                <th class="text-center text-uppercase text-secondary text-l font-weight-bolder opacity-7">
                  Berkas</th>
                <th class="text-center text-uppercase text-secondary text-l font-weight-bolder opacity-7">
                  Status</th>
                <th class="text-secondary opacity-7">AKSI</th>
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
                  <td class="align-middle text-center text-secondary text-m">
                    {{ $pinjam->keperluan }}
                  </td>
                  <td class="align-middle text-center text-secondary text-m">
                    {{ $pinjam->mulai_pinjam }}
                  </td>
                  <td class="align-middle text-center text-secondary text-m">
                    <a href="{{ url('/dashboard/pinjaman/download/' . $pinjam->rundown) }}"><i
                        class="fas fa-download"></i></a>
                  </td>
                  <td
                    class="mt-3 text-center text-white text-m badge
                    @if ($pinjam->status == 'diterima') bg-gradient-success
                    @elseif($pinjam->status == 'ditolak') bg-gradient-danger
                    @else bg-gradient-warning @endif">
                    {{ $pinjam->status }}
                  </td>
                  <td class="align-baseline ">
                    <div class="d-flex justify-content-between">
                      @if ($pinjam->status == 'menunggu')
                        <form action="/dashboard/pinjaman/{{ $pinjam->kode_peminjaman }}" method="POST">
                          @method('PUT')
                          @csrf
                          {{-- rejected --}}
                          <label for="status"></label>
                          <input type="text" name="status" value="ditolak" hidden>
                          <input type="text" name="kode_peminjaman" value="{{ $pinjam->kode_peminjaman }}" hidden>
                          <button class="btn btn-danger p-2" type="submit">
                            <i class="material-icons">cancel</i>
                          </button>
                        </form>
                        <form action="/dashboard/pinjaman/{{ $pinjam->kode_peminjaman }}" method="POST">
                          @method('PUT')
                          @csrf
                          <input type="text" name="status" value="diterima" hidden>
                          <input type="text" name="kode_peminjaman" value="{{ $pinjam->kode_peminjaman }}" hidden>
                          <button class="btn btn-success p-2" type="submit">
                            <i class="material-icons outline text-white">done</i>
                          </button>
                        </form>
                      @endif

                    </div>
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
