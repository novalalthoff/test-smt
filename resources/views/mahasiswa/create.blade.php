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
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset ('template/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{ asset ('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{ asset ('template/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset ('template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset ('template/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('template/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="{{ asset ('template/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="{{ asset ('template/plugins/bs-stepper/css/bs-stepper.min.css') }}">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="{{ asset ('template/plugins/dropzone/min/dropzone.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('template/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg"><strong>{{ $page }}</strong></p>

      <form action="{{ url("$url") }}" method="POST">
        @csrf
        <div class="mb-3">
          <label class="col-form-label" for="nim">NIM</label>
          <input name="nim" id="nim" type="text" class="form-control" placeholder="NIM" required>
        </div>
        <div class="mb-3">
          <label class="col-form-label" for="nama">Nama Lengkap</label>
          <input name="nama" id="nama" type="text" class="form-control" placeholder="Nama Lengkap" required>
        </div>
        <div class="mb-3">
          <label class="col-form-label" for="kode_jurusan">Jurusan</label>
          <select id="select-jurusan" class="form-control" name="kode_jurusan" required>
            <option value="">Pilih Jurusan</option>
            @foreach ($jurusan as $p)
              <option value="{{ $p->kode_jurusan }}">{{ $p->nama }}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label class="col-form-label" for="tempat_lahir">Tempat Lahir</label>
          <input name="tempat_lahir" id="tempat_lahir" type="text" class="form-control" placeholder="Tempat Lahir" required>
        </div>
        <div class="mb-3">
          <label class="col-form-label" for="tanggal_lahir">Tanggal Lahir</label>
          <input name="tanggal_lahir" id="tanggal_lahir" type="text" class="form-control" placeholder="YYYY-MM-DD" required>
        </div>
        {{-- <div class="form-group">
          <label>Tanggal Lahir</label>
            <div class="input-group date" id="reservationdate" data-target-input="nearest">
              <input name="tanggal_lahir" type="text" class="form-control datetimepicker-input" data-target="#reservationdate" placeholder="Tanggal Lahir" required/>
              <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
            </div>
        </div> --}}
        <div class="mb-3">
          <label class="col-form-label" for="alamat">Alamat Lengkap</label>
          <textarea name="alamat" id="alamat" class="form-control" rows="3" placeholder="Alamat Lengkap" required></textarea>
        </div>
        <div class="row mb-3">
          <div class="col-6">
            <input type="reset" class="btn btn-secondary btn-block" value="Cancel">
          </div>
          <div class="col-6">
            <input type="submit" class="btn btn-primary btn-block" value="Simpan">
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="{{ url("$url") }}" class="text-center"><i class="fa fa-door-open"></i> Kembali</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{ asset ('template/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset ('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset ('template/plugins/select2/js/select2.full.min.js') }}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{ asset ('template/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset ('template/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset ('template/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
<!-- date-range-picker -->
<script src="{{ asset ('template/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap color picker -->
<script src="{{ asset ('template/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset ('template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Bootstrap Switch -->
<script src="{{ asset ('template/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
<!-- BS-Stepper -->
<script src="{{ asset ('template/plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>
<!-- dropzonejs -->
<script src="{{ asset ('template/plugins/dropzone/min/dropzone.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('template/dist/js/adminlte.min.js') }}"></script>
<!-- Page specific script -->
<script>
  //Date picker
  $('#reservationdate').datetimepicker({
    format: 'L'
  });
</script>
</body>
</html>
