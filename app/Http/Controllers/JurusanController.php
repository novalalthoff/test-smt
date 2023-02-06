<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\Models\Jurusan;

class JurusanController extends Controller
{

  private $views      = 'jurusan';
  private $url        = 'master-jurusan';
  private $title      = 'Halaman Data jurusan';


  public function __construct()
  {
    // Di isi Construct
    $this->jurusan = new Jurusan;
  }

  public function index()
  {
    $jurusan = $this->jurusan->get();

    $data = [
      'title'         => $this->title,
      'url'           => $this->url,
      'page'          => 'Halaman Data Jurusan',
      'jurusan'       => $jurusan
    ];

    return view($this->views . "/index", $data);
  }

  public function create()
  {
    $data = [
      'title'         => $this->title,
      'url'           => $this->url,
      'page'          => 'Tambah Data jurusan',
    ];

    return view($this->views . "/create", $data);
  }

  public function store(Request $request)
  {
    $dataJurusan = [
      'kode_jurusan'     => $request->kode_jurusan,
      'nama'             => $request->nama
    ];
    $this->jurusan->create($dataJurusan);

    return redirect("$this->url")->with('sukses', 'Jurusan berhasil di tambahkan');
  }

  public function show($id)
  {
    $jurusan      = $this->jurusan->where('id', $id)->first();

    $data = [
      'title'         => $this->title,
      'url'           => $this->url,
      'page'          => 'Detail Data Jurusan',
      'nama'          => $nama,
    ];
    return view($this->views . "/show", $data);
  }

  public function edit($id)
  {
    $jurusan       = $this->jurusan->where('id', $id)->first();

    $data = [
      'title'         => $this->title,
      'url'           => $this->url,
      'page'          => 'Edit Data Jurusan',
      'id'            => $id,
      'nama'          => $nama,
    ];
    return view($this->views . "/edit", $data);
  }

  public function update(Request $request, $id)
  {
    $dataJurusan = [
      'kode_jurusan'     => $request->kode_jurusan,
      'nama'             => $request->nama
    ];
    $this->jurusan->where('id', $id)->update($dataJurusan);

    return redirect("$this->url")->with('sukses', 'Data Jurusan berhasil di edit');
  }

  public function destroy($id)
  {
    $jurusan       = $this->jurusan->where('id', $id)->first();
    $this->jurusan->destroy($id);

    return redirect("$this->url")->with('sukses', 'Data Jurusan ' . $jurusan->nama . ' berhasil di hapus');
  }
}
