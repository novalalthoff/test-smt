<!-- Content Header (Page header) -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset ('template/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset ('template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('template/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1><strong>{{ $title }}</strong></h1>
      </div>
      <div class="col-sm-6">
        <a href="{{ url("$url/create", []) }}" class="btn btn-sm btn-primary float-right">Tambah Data</a>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        @if (session()->has('sukses'))
            <div class="alert alert-success dark alert-dismissible fade show" role="alert">
                {{ session('sukses') }}
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif (session()->has('gagal'))
            <div class="alert alert-danger dark alert-dismissible fade show" role="alert">
                {{ session('gagal') }}
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Daftar Mahasiswa diatas 21 Tahun</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Umur</th>
                <th width="10%">Action</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($mahasiswa as $p)
                    @php
                        $today = date("Y-m-d");
                        $umur = date_diff(date_create($p->tanggal_lahir), date_create($today));
                        $umur = $umur->format('%y');
                    @endphp
                    @if ($umur >= 21)
                        <tr>
                            <td>{{ $p->nim }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->jurusan->nama }}</td>
                            <td>{{ $umur }} tahun</td>
                            <td>
                                <div class="btn-group btn-group-square" role="group" aria-label="">
                                    <a href="{{ url("$url/" . $p->id, []) }}" class="btn btn-dark"
                                        title="Detail Data">Detail</a>
                                    <a href="{{ url("$url/" . $p->id, []) }}/edit" class="btn btn-primary"
                                        title="Ubah Data">Edit</a>
                                    <a href="{{ route('mahasiswa.destroy', ['id' => $p->id]) }}"
                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $p->id }}').submit();"
                                        class="btn btn-danger" title="Hapus Data">Hapus</a>
                                    <form id="delete-form-{{ $p->id }}"
                                        action="{{ route('mahasiswa.destroy', ['id' => $p->id]) }}" method="POST"
                                        style="display: none;">@csrf</form>
                                </div>
                            </td>
                        </tr>
                    @endif
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>

  <!-- /.Mahasiswa dibawah 21 tahun -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Daftar Mahasiswa Lainnya</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Umur</th>
                <th width="10%">Action</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($mahasiswa as $p)
                    @php
                        $today = date("Y-m-d");
                        $umur = date_diff(date_create($p->tanggal_lahir), date_create($today));
                        $umur = $umur->format('%y');
                    @endphp
                    @if ($umur < 21)
                        <tr>
                            <td>{{ $p->nim }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->jurusan->nama }}</td>
                            <td>{{ $umur }} tahun</td>
                            <td>
                                <div class="btn-group btn-group-square" role="group" aria-label="">
                                    <a href="{{ url("$url/" . $p->id, []) }}" class="btn btn-dark"
                                        title="Detail Data">Detail</a>
                                    <a href="{{ url("$url/" . $p->id, []) }}/edit" class="btn btn-primary"
                                        title="Ubah Data">Edit</a>
                                    <a href="{{ route('mahasiswa.destroy', ['id' => $p->id]) }}"
                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $p->id }}').submit();"
                                        class="btn btn-danger" title="Hapus Data">Hapus</a>
                                    <form id="delete-form-{{ $p->id }}"
                                        action="{{ route('mahasiswa.destroy', ['id' => $p->id]) }}" method="POST"
                                        style="display: none;">@csrf</form>
                                </div>
                            </td>
                        </tr>
                    @endif
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>

<!-- jQuery -->
<script src="{{ asset ('template/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset ('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset ('template/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset ('template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset ('template/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset ('template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset ('template/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset ('template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset ('template/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset ('template/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset ('template/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset ('template/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset ('template/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset ('template/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('template/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset ('template/dist/js/demo.js') }}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>