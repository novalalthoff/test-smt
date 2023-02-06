<!-- Content Header (Page header) -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $page }}</title>

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
        <a href="{{ url("$url") }}" class="float-right mr-3"><i class="fa fa-door-open"></i> Kembali</a>
        {{-- <a href="{{ url("$url/create", []) }}" class="btn btn-sm btn-primary float-right">Tambah Data</a> --}}
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">{{ $page }}</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <tbody>
                  <tr>
                      <td><strong>NIM</strong></td>
                      <td>{{ $mahasiswa->nim }}</td>
                  </tr>
                  <tr>
                      <td><strong>Nama Lengkap</strong></td>
                      <td>{{ $mahasiswa->nama }}</td>
                  </tr>
                  <tr>
                      <td><strong>Jurusan</strong></td>
                      <td>{{ $mahasiswa->jurusan->nama }}</td>
                  </tr>
                  <tr>
                      <td><strong>Tempat Lahir</strong></td>
                      <td>{{ $mahasiswa->tempat_lahir }}</td>
                  </tr>
                  <tr>
                      <td><strong>Tanggal Lahir</strong></td>
                      <td>{{ $mahasiswa->tanggal_lahir }}</td>
                  </tr>
                  <tr>
                      <td><strong>Umur</strong></td>
                      @php
                          $today = date('Y-m-d');
                          $umur = date_diff(date_create($mahasiswa->tanggal_lahir), date_create($today));
                          $umur = $umur->format('%y');
                      @endphp
                      <td>{{ $umur }} tahun</td>
                  </tr>
                  <tr>
                      <td><strong>Alamat Lengkap</strong></td>
                      <td>{{ $mahasiswa->alamat }}</td>
                  </tr>
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
  //
</script>
</body>
</html>