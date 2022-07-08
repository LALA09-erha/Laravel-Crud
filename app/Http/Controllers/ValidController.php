<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidController extends Controller
{
    public function prosestambah()
    {
        $mahasiswa = new \App\Models\MahasiswaModel;
        $nama = request()->nama;
        $nim = request()->nim;
        $umur = request()->umur;
        $alamat = request()->alamat;
        $data = array(
            'nim' => $nim,
            'nama' => $nama,
            'umur' => $umur,
            'alamat' => $alamat
        );
        #cek apakah data sudah ada atau belum di database berdasarkan nim
        $cek = \App\Models\MahasiswaModel::where('nim', $nim)->first();
        if ($cek) {
            #alert javascript dan redirect kembali ke halaman tambah
            return redirect('/tambah')->with('pesan', 'Data sudah ada!');
        }

        $mahasiswa->create($data);
        return redirect('/')->with('pesan', 'Data berhasil ditambahkan!');
    }
    public function nilai($id)
    {
        $mahasiswa = \App\Models\MahasiswaModel::find($id);
        return view('pages.nilai', ['mahasiswa' => $mahasiswa]);
    }
    public function prosesnilai()
    {
        $id = request()->nim;
        $mahasiswa = \App\Models\MahasiswaModel::find($id);
        $mahasiswa->nilai = request()->nilai;
        $mahasiswa->save();
        return redirect('/')->with('pesan', 'Data berhasil diubah!');
    }

    public function edit($id)
    {
        $mahasiswa = \App\Models\MahasiswaModel::where('nim', $id)->first();
        return view('pages.edit', ['mahasiswa' => $mahasiswa]);
    }

    public function prosesedit()
    {
        $nim = request()->nim;
        $nimold = request()->nimold;
        $nama = request()->nama;
        $umur = request()->umur;
        $alamat = request()->alamat;
        $data = array(
            'nim' => $nim,
            'nama' => $nama,
            'umur' => $umur,
            'alamat' => $alamat
        );

        $mahasiswa = \App\Models\MahasiswaModel::where('nim', $nimold)->first();
        if ($mahasiswa->nim != $nim) {
            $cek = \App\Models\MahasiswaModel::where('nim', $nim)->first();
            if ($cek) {
                return redirect('/edit/' . $nimold)->with('pesan', 'Data sudah ada!');
            }
            $mahasiswa->update($data);
            return redirect('/')->with('pesan', 'Data berhasil diubah!');
        }
        if ($mahasiswa->nim == $nimold && $mahasiswa->nama == $nama && $mahasiswa->umur == $umur && $mahasiswa->alamat == $alamat) {
            return redirect('/edit/' . $nimold)->with('pesan', 'Data tidak berubah!');
        }
        $mahasiswa->update($data);
        return redirect('/')->with('pesan', 'Data berhasil diubah!');
    }

    public function cari()
    {
        $nim = request()->cari;
        $mahasiswa = \App\Models\MahasiswaModel::where('nim', $nim)->first();
        if ($mahasiswa) {
            return view('pages.cari', ['mahasiswa' => $mahasiswa]);
        }
        return redirect('/')->with('pesan', 'Data tidak ditemukan!');
    }

    public function hapus($id)
    {
        $mahasiswa = \App\Models\MahasiswaModel::where('nim', $id)->first();
        $mahasiswa->delete();
        return redirect('/')->with('pesan', 'Data berhasil dihapus!');
    }
}