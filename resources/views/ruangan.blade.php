@extends('layouts.main')

@section('title', 'Ruangan')
@section('ruangan-active', 'active bg-gradient-primary')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script src='https://code.jquery.com/jquery-3.7.0.js'></script>
<script src='https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js'></script>

@section('container')
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Daftar Ruangan</h6>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          {{-- Table --}}
          <table id="myTable" class="display table table-hover align-items-center mb-0">
            <thead>
              <th scope="col" class="text-uppercase text-secondary text-l font-weight-bolder opacity-7">No</th>
              <th scope="col" class="text-uppercase text-secondary text-l font-weight-bolder opacity-7 ps-2">Ruangan
              </th>
              <th scope="col" class="text-center text-uppercase text-secondary text-l font-weight-bolder opacity-7">
                Kapasitas</th>
              <th scope="col" class="text-center text-uppercase text-secondary text-l font-weight-bolder opacity-7">
                Lokasi</th>
            </thead>
            <tbody>
              @foreach ($ruangan as $ruang)
                <tr>
                  <td class="text-secondary text-xs font-weight-bold">
                    {{ $loop->iteration }}
                  </td>
                  <td>
                    <span class="text-secondary text-m font-weight-bold">
                      {{ $ruang->nama_ruangan }}
                    </span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-s font-weight-bold">
                      {{ $ruang->kapasitas_ruangan }}
                    </span>
                  </td>
                  <td class="align-middle">
                    <span class="text-secondary text-s font-weight-bold">
                      {{ $ruang->lokasi }}
                    </span>
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
  @section('scripts')
    <script>
      let table = new DataTable('#myTable', {
        scrollY: 400,
        paging: true
      });
    </script>
  @endsection
