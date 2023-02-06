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
        <div class="card-body table-responsive">
            <table id="basic-1" class="display">
                <thead>
                    <tr>
                        <th>
                            <h5>Data Mahasiswa</h5>
                        </th>
                        <th></th>
                    </tr>
                </thead>
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
    </div>
</div>
