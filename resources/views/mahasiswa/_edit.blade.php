<div class="col-sm-12 pt-4">
    @if (session()->has('sukses'))
        <div class="alert alert-success" role="alert">
            {{ session('sukses') }}
        </div>
    @elseif (session()->has('gagal'))
        <div class="alert alert-danger" role="alert">
            {{ session('gagal') }}
        </div>
    @endif
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
        <form action="{{ url("$url") }}/{{ $id }}" method="post">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <div class="mb-3">
                        <label class="col-form-label pt-0" for="nim">NIM</label>
                        <input name="nim" id="nim" class="form-control" type="text" value="{{ $mahasiswa->nim }}">
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label pt-0" for="nama">Nama Lengkap</label>
                        <input name="nama" id="nama" class="form-control" type="text" value="{{ $mahasiswa->nama }}">
                    </div>
                    <div class="mb-3">
                      <label>Jurusan</label>
                      <select id="select-jurusan" class="form-control" name="kode_jurusan" required>
                          <option value="{{ $mahasiswa->jurusan->kode_jurusan }}">{{ $mahasiswa->jurusan->nama }}</option>
                          @foreach ($jurusan as $p)
                              @if ($p->id != $mahasiswa->jurusan->id)
                                  <option value="{{ $p->id }}">{{ $p->nama }}</option>
                              @endif
                          @endforeach
                      </select>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label pt-0" for="tempat_lahir">Tempat Lahir</label>
                        <input name="tempat_lahir" id="tempat_lahir" class="form-control" type="text" value="{{ $mahasiswa->tempat_lahir }}">
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label pt-0" for="tanggal_lahir">Tanggal Lahir</label>
                        <input name="tanggal_lahir" id="tanggal_lahir" class="form-control" type="text" value="{{ $mahasiswa->tanggal_lahir }}">
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label pt-0" for="alamat">Alamat Lengkap</label>
                        <input name="alamat" id="alamat" class="form-control" type="text" value="{{ $mahasiswa->alamat }}">
                    </div>
                </div>
                <div class="form-group mt-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
            </div>
        </form>
    </div>
</div>
