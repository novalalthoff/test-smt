<div class="col-sm-12 pt-4">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-6">
                    <h5 class="card-title">{{ $page }}</h5>
                </div>
                <div class="col-lg-6">
                    <a href="{{ url("$url") }}" class="btn btn-sm btn-primary float-end">Kembali</a>
                </div>
            </div>
        </div>
        {{-- otomatis masuk ke admin/daerah , karena pake resource --}}
        <form action="{{ url("$url") }}" method="POST">
            {{-- csrf gunanya buat pastiin kalo data dari form. sejenis security --}}
            @csrf
            {{-- <input type="text" name="e" >
                <input type="submit" > --}}
            <div class="card-body">
                <div class="mb-3">
                    <label class="col-form-label pt-0" for="nim">NIM</label>
                    <input name="nim" id="nim" class="form-control" type="text" placeholder="NIM">
                </div>
                <div class="mb-3">
                    <label class="col-form-label pt-0" for="nama">Nama</label>
                    <input name="nama" id="nama" class="form-control" type="text" placeholder="Mahasiswa">
                </div>
                <div class="mb-3">
                    <div class="col-form-label">Jurusan</div>
                    <select id="select-jurusan" class="js-example-basic-single col-sm-12" name="kode_jurusan" required>
                        <option value="">Pilih</option>
                        @foreach ($jurusan as $p)
                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="col-form-label pt-0" for="tempat_lahir">Tempat Lahir</label>
                    <input name="tempat_lahir" id="tempat_lahir" class="form-control" type="text"
                        placeholder="Tempat Lahir">
                </div>
                <div class="mb-3">
                    <label class="col-form-label pt-0" for="tanggal_lahir">Tanggal Lahir</label>
                    <input name="tanggal_lahir" id="tanggal_lahir" class="form-control" type="text"
                        placeholder="Tanggal Lahir">
                </div>
                <div class="mb-3">
                    <label class="col-form-label pt-0" for="alamat">Alamat Lengkap</label>
                    <input name="alamat" id="alamat" class="form-control" type="text"
                        placeholder="Alamat Lengkap">
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Simpan">
                <input type="reset" class="btn btn-secondary" value="Cancel">
            </div>
        </form>
    </div>
</div>
