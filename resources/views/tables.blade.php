@extends('layouts.main')

@section('title', 'Daftar Peminjaman')
@section('table-active', 'active bg-gradient-primary')

@section('container')
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Daftar Aktifitas</h6>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-l font-weight-bolder opacity-7">Ruang</th>
                <th class="text-uppercase text-secondary text-l font-weight-bolder opacity-7 ps-2">Kegunaan
                </th>
                <th class="text-center text-uppercase text-secondary text-l font-weight-bolder opacity-7">
                  Status</th>
                <th class="text-center text-uppercase text-secondary text-l font-weight-bolder opacity-7">
                  waktu</th>
                <th class="text-center text-uppercase text-secondary text-l font-weight-bolder opacity-7">
                  Peminjam</th>
                <th class="text-secondary opacity-7"></th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <img src="../assets/img/team-2.jpg" class="avatar avatar-xxl me-3 border-radius-lg" alt="user1">
                    <h6 class="text-sm my-5">John Michael</h6>
                  </div>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0">Manager</p>
                  <p class="text-xs text-secondary mb-0">Organization</p>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="badge badge-sm bg-gradient-warning">Menunggu</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">ramdani</span>
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
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <img src="../assets/img/team-2.jpg" class="avatar avatar-xxl me-3 border-radius-lg" alt="user1">
                    <h6 class="text-sm my-5">John Michael</h6>
                  </div>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0">Manager</p>
                  <p class="text-xs text-secondary mb-0">Organization</p>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="badge badge-sm bg-gradient-success">Online</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">ramdani</span>
                </td>
                <td class="align-middle">
                  <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                    data-original-title="Edit user">
                    Edit
                  </a>
                </td>
              </tr>
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
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
@endsection
</body>

</html>
