<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\Models\Mahasiswa;
use App\Models\Jurusan;

class MahasiswaController extends Controller
{

  private $views      = 'mahasiswa';
  private $url        = 'master-mahasiswa';
  private $title      = 'Halaman Data mahasiswa';


  public function __construct()
  {
    // Di isi Construct
    $this->mahasiswa = new Mahasiswa;
    $this->jurusan = new Jurusan;
  }

  public function index()
  {
    $mahasiswa = $this->mahasiswa->get();

    $data = [
      'title'         => $this->title,
      'url'           => $this->url,
      'page'          => 'Halaman Data Mahasiswa',
      'mahasiswa'     => $mahasiswa
    ];

    return view($this->views . "/index", $data);
  }

  public function create()
  {
    $jurusan        = $this->jurusan->get();

    $data = [
      'title'         => $this->title,
      'url'           => $this->url,
      'page'          => 'Tambah Data mahasiswa',
      'jurusan'       => $jurusan
    ];

    return view($this->views . "/create", $data);
  }

  public function store(Request $request)
  {
    $dataMahasiswa = [
      'nim'             => $request->nim,
      'nama'            => $request->nama,
      'kode_jurusan'    => $request->kode_jurusan,
      'tempat_lahir'    => $request->tempat_lahir,
      'tanggal_lahir'   => $request->tanggal_lahir,
      'alamat'          => $request->alamat
    ];
    $this->mahasiswa->create($dataMahasiswa);

    return redirect("$this->url")->with('sukses', 'Mahasiswa berhasil di tambahkan');
  }

  public function show($id)
  {
    $mahasiswa      = $this->mahasiswa->where('id', $id)->first();

    $data = [
      'title'         => $this->title,
      'url'           => $this->url,
      'page'          => 'Detail Data Mahasiswa',
      'mahasiswa'     => $mahasiswa,
    ];
    return view($this->views . "/show", $data);
  }

  public function edit($id)
  {
    $mahasiswa       = $this->mahasiswa->where('id', $id)->first();
    $jurusan         = $this->jurusan->get();

    $data = [
      'title'         => $this->title,
      'url'           => $this->url,
      'page'          => 'Edit Data Mahasiswa',
      'id'            => $id,
      'mahasiswa'     => $mahasiswa,
      'jurusan'       => $jurusan
    ];
    return view($this->views . "/edit", $data);
  }

  public function update(Request $request, $id)
  {
    $dataMahasiswa = [
      'nim'             => $request->nim,
      'nama'            => $request->nama,
      'kode_jurusan'    => $request->kode_jurusan,
      'tempat_lahir'    => $request->tempat_lahir,
      'tanggal_lahir'   => $request->tanggal_lahir,
      'alamat'          => $request->alamat
    ];
    $this->mahasiswa->where('id', $id)->update($dataMahasiswa);

    return redirect("$this->url")->with('sukses', 'Data Mahasiswa berhasil di edit');
  }

  public function destroy($id)
  {
    $mahasiswa       = $this->mahasiswa->where('id', $id)->first();
    $this->mahasiswa->destroy($id);

    return redirect("$this->url")->with('sukses', 'Data Mahasiswa ' . $mahasiswa->nama . ' berhasil di hapus');
  }
}
