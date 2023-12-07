@extends('layouts.main')

@section('title', 'Ruangan')
@section('ruangan-active', 'active bg-gradient-primary')
@section('container')
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Daftar Ruangan</h6>
        </div>
      </div>

      <div class="card-body pb-2 pe-2">
        <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-dark">Tambah</button>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="1"
          aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Ruangan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form method="POST" action="/dashboard/ruangan">
                  @csrf
                  <div class="mb-3">
                    <label for="kode_ruangan" class="form-label">Kode Ruangan</label>
                    <input type="number" name="kode_ruangan" class="form-control border p-1" id="kodeRuangan"
                      aria-describedby="kodeHelp">
                  </div>
                  <div class="mb-3">
                    <label for="nama_ruangan" class="form-label">Nama Ruangan</label>
                    <input type="text" name="nama_ruangan" class="form-control border p-1" id="namaRuangan">
                  </div>
                  <div class="mb-3">
                    <label for="kapasitas_ruangan" class="form-label">Kapasitas</label>
                    <input type="number" name="kapasitas_ruangan" class="form-control border p-1" id="kapasitasRuangan">
                  </div>
                  <div class="mb-3">
                    <label for="lokasi" class="form-label">Lokasi</label>
                    <input type="text" name="lokasi" class="form-control border p-1" id="lokasiRuangan">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
              </div>
            </div>
          </div>
        </div>
        <div class="table-responsive p-3">

          {{-- Table --}}
          <table id="myTable" class="display table table-hover align-items-center mb-0">
            <thead>
              <th scope="col" class="text-uppercase text-secondary text-l font-weight-bolder opacity-7">No
              </th>
              <th scope="col" class=" text-uppercase text-secondary text-l font-weight-bolder opacity-7 ps-2">
                Ruangan
              </th>
              <th scope="col" class="text-center text-uppercase text-secondary text-l font-weight-bolder opacity-7">
                Kapasitas</th>
              <th scope="col" class="text-center text-uppercase text-secondary text-l font-weight-bolder opacity-7">
                Lokasi</th>
              <th scope="col" class="text-center text-uppercase text-secondary text-l font-weight-bolder opacity-7">
              </th>
            </thead>
            <tbody>
              @foreach ($ruangan as $ruang)
                <tr>
                  <td class="text-center text-secondary text-s font-weight-bold">
                    {{ $loop->iteration }}
                  </td>
                  <td class="text-secondary text-m font-weight-bold">
                    {{ $ruang->nama_ruangan }}
                  </td>
                  <td class="align-middle text-center text-secondary text-m font-weight-bold">
                    {{ $ruang->kapasitas_ruangan }}
                  </td>
                  <td class="align-middle text-secondary text-m font-weight-bold">
                    {{ $ruang->lokasi }}
                  </td>
                  <td>
                    <div class="d-flex justify-content-evenly">
                      <button
                        class="btn btn-primary btn-sm btn-warning text-white material-icons shadow-none">edit</button>
                      <button
                        class="btn btn-primary btn-sm btn-warning text-white material-icons shadow-none">delete</button>
                    </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          {{-- Table --}}
        </div>

      </div>
    </div>
  @endsection
  {{-- @section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  @endsection --}}