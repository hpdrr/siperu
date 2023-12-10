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

<body id="page-top" style="background-color: #eaeaea">
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
          {{-- <li class="nav-item"><a class="nav-link" href="/logout"><i class="fas fa-right-from-bracket"></i></a></li> --}}
          @auth
            @if (!($user->role_id === 1))
              <li class="nav-item"><a class="nav-link" href="#status">Status Peminjaman</a></li>
            @endif
            <li class="nav-item">
              <form action="/logout" method="POST">
                @csrf
                <button class="btn nav-link text-white">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="fas fa-right-from-bracket"></i>
                  </div>
                </button>
              </form>
            </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>
  <!-- Masthead-->
  <header class="masthead">
    {{-- <span class="mask bg-gradient-dark opacity-6"></span> --}}
    <div class="container">
      <div class="masthead-subheading">Selamat Datang di</div>
      <div class="masthead-heading text-uppercase mb-1"><a href="https://sif.uin-suska.ac.id"
          style="text-decoration: none; color: #2776BF;">SI</a>PERU</div>
      <div class="masthead-subheading mb-5" style="font-style: normal; font-size: 1.5rem;">Sistem Informasi Peminjaman
        Ruangan</div>
      @guest
        <a class="btn btn-primary btn-xl text-uppercase" href="/login">Login</a>
      @endguest
      @auth
        @if ($user->role_id === 1)
          <a class="btn btn-primary btn-xl text-uppercase" href="/dashboard">Dashboard</a>
        @else
          <a class="btn btn-primary btn-xl text-uppercase" href="#ruangan">Ajukan Peminjaman</a>
        @endif
      @endauth
    </div>
  </header>
  {{-- notifikasi --}}

  <!-- fitur-->
  <section class="page-section" id="fitur" style="background-color: #eaeaea;">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Fitur</h2>
        <h3 class="section-subheading text-muted">Fitur-fitur yang tersedia pada <a href="https://sif.uin-suska.ac.id"
            style="color: #2776BF; text-decoration:none;">SI</a>PERU</h3>
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
  {{-- notifikasi --}}

  <section class="page-section" id="status" style="background-color: #eaeaea;">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Status Peminjaman</h2>

        <div class="table-responsive p-0 col-10 d-flex mx-auto">
          <table class="table table-striped table-hover align-items-center mb-0">
            <thead class="table-info border">
              <th class="text-center text-uppercase text-l font-weight-bolder">No</th>
              <th class="text-center text-uppercase text-l font-weight-bolder">Ruangan</th>
              <th class="text-center text-uppercase text-l font-weight-bolder">Tanggal</th>
              <th class="text-center text-uppercase text-l font-weight-bolder">Agenda</th>
              <th class="text-center text-uppercase text-l font-weight-bolder">Status</th>
            </thead>
            <tbody>
              @foreach ($peminjaman as $pinjam)
                <tr>
                  <td class="text-center text-sm font-weight-bold">{{ $loop->iteration }}</td>
                  <td class="text-center text-m font-weight-bold ps-3">{{ $pinjam->kode_ruangan }}</td>
                  <td class="align-middle text-center text-sm font-weight-bold">
                    {{ $pinjam->mulai_pinjam }}
                  </td>
                  <td class="align-middle text-center text-m">{{ $pinjam->keperluan }}</td>
                  <td class="mt-3 text-center text-m font-weight-bold">
                    {{ $pinjam->status }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      {{-- <div class="row text-center">
            <div class="col-md-4 ">
              <h4 class="my-3">Pengajuan Peminjaman</h4>
              <p class="text-muted">Unggah berkas untuk persyaratan pengajuan peminjaman</p>
            </div>
          </div> --}}
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
            <div class="ruangan-item">
              <a class="ruangan-link" data-bs-toggle="modal" href="#ruanganModal{{ $loop->iteration }}">
                <div class="ruangan-hover">
                  <div class="ruangan-hover-content"></div>
                </div>
                <img class="img-fluid border-radius-lg" src="{{ asset('storage/' . $ruang->image) }}"
                  alt="{{ $ruang->image }}" />
              </a>
              <div class="ruangan-caption">
                <div class="ruangan-caption-heading">{{ $ruang->nama_ruangan }}</div>
                <div class="ruangan-caption-subheading text-muted">{{ $ruang->lokasi }}</div>
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
  <!-- RUangan Modals-->
  @foreach ($ruangan as $ruang)
    <div class="modal fade col-12" id="ruanganModal{{ $loop->iteration }}" tabindex="-1" role="dialog"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content bg-dark text-white">
          <div class="close-modal d-flex justify-content-end p-2" data-bs-dismiss="modal">
            <i class="fas fa-close"></i>
          </div>
          <div class="container">
            <div class="row ">
              <div class="col-12">
                <div class="modal-body d-flex justify-content-center flex-column">
                  <div>
                    <h2 class="text-uppercase">{{ $ruang->nama_ruangan }}</h2>
                    <img class="img-fluid d-block border-radius-lg mx-auto mb-3"
                      src="{{ asset('storage/' . $ruang->image) }}" alt="{{ $ruang->nama_ruangan }}" />
                    <ul class="list-inline">
                      <li>Kapasitas: <strong>{{ $ruang->kapasitas_ruangan }}</strong></li>
                      <li>Lokasi: <strong>{{ $ruang->lokasi }}</strong></li>
                    </ul>
                  </div>
                  @auth
                    @if (!($user->role_id === 1))
                      <button type="button" class="btn btn-warning btn-sm btn-edit text-white shadow p-2 mb-3"
                        data-bs-toggle="modal" data-bs-target="#modalPinjam-{{ $ruang->kode_ruangan }}">
                        Pinjam
                      </button>
                    @endif
                  @endauth
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- modal pinjam --}}
    <div class="modal fade" id="modalPinjam-{{ $ruang->kode_ruangan }}" data-bs-backdrop="static"
      data-bs-keyboard="true" tabindex="-1" aria-labelledby="modalPinjamLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content bg-dark text-white">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalPinjamLabel">{{ $ruang->nama_ruangan }}</h1>
          </div>
          <div class="modal-body">
            <form method="POST" action="/" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="kode" class="form-label" hidden>Kode Ruangan </label>
                <input class="form-control border p-1" name="kode_ruangan" value="{{ $ruang->kode_ruangan }}"
                  type="text" id="kodeRuangan" hidden>
              </div>
              <div class="mb-3">
                <label for="user_id" class="form-label" hidden>NIM Peminjam</label>
                <input type="text" name="user_id" class="form-control border p-1"
                  value="@auth{{ $user->nim }} @endauth" id="userIdPeminjam" hidden>
              </div>
              <div class="mb-3">
                <label for="tanggalPinjam" class="form-label">Masukkan tanggal</label>
                <input type="date" name="mulai_pinjam" class="form-control border p-1" id="tanggalPinjamRuangan"
                  required>
              </div>
              <div class="mb-3">
                <label for="agenda" class="form-label">Agenda</label>
                <input type="text" name="keperluan" class="form-control border p-1" id="agendaRuangan" required>
              </div>
              <div class="mb-3">
                <label for="rundown" class="form-label">Tambahkan File Rundown acara</label>
                <input class="form-control border p-1 @error('rundown') is-invalid @enderror" name="rundown"
                  type="file" accept="application/pdf" id="rundownAcara">
              </div>
              @error('rundown')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
              <button type="submit" class="btn btn-success shadow">Ajukan peminjaman</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          </div>
        </div>
      </div>
    </div>
  @endforeach

  {{-- pinjam modals --}}

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="{{ asset('assets/js/script.js') }}"></script>
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
