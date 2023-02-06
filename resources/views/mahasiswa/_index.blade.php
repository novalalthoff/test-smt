<div class="row">
    <div class="col-sm-12 pt-4">
        <!-- Alerts -->
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
        <!-- End of Alerts -->
        <div class="card">
            <div class="card-header p-3">
                <div class="row">
                    <div class="col-lg-6">
                        <h5 class="card-title">{{ $title }}</h5>
                    </div>
                    <div class="col-lg-6">
                      <a href="{{ url("$url/create", []) }}" class="btn btn-sm btn-primary float-end">Tambah Data</a>
                    </div>
                </div>
                <div class="row mt-3">
                    <h5>Daftar Mahasiswa diatas 21 Tahun</h5>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table id="basic-1" class="table table-hover table-striped">
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
        </div>

        <!-- Mahasiswa dibawah 21 tahun -->
        <div class="card">
            <div class="card-header p-3">
                <div class="row">
                    <div class="col-lg">
                        <h5 class="card-title">Lainnya</h5>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table id="basic-1" class="table table-hover table-striped">
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
        </div>
    </div>
</div>
