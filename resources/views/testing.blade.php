<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>testing</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
  <script src='https://code.jquery.com/jquery-3.7.0.js'></script>
  <script src='https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js'></script>
  <script src='https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js'></script>
</head>

<body>
  <table id="myTable" class="display table table-striped table-hover">
    <thead>
      <th scope="col">No</th>
      <th scope="col">Ruangan</th>
      <th scope="col">Kapasitas</th>
      <th scope="col">Lokasi</th>
    </thead>
    <tbody>
      @foreach ($ruangan as $ruang)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $ruang->nama_ruangan }}</td>
          <td>{{ $ruang->kapasitas_ruangan }}</td>
          <td>{{ $ruang->lokasi }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <script>
    let table = new DataTable('#myTable', {
      scrollY: 300,
      paging: false
    });
  </script>
</body>

</html>
