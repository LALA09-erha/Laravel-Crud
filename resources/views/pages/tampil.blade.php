@extends('layouts.tamplate', ['title' => 'Tampil Data', 'home' => 'active'])
@section('content')
    <div class="row justify-content-center">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-11">

            <h1>Tampil Data</h1>
            <a href="/tambah" class="btn btn-primary mb-1">Tambah Data</a>
            <div class="container justify-content-center text-center">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>NIM</th>
                                        <th>NAMA</th>
                                        <th>UMUR</th>
                                        <th>ALAMAT</th>
                                        <th>NILAI</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- jika tidak ada data --}}
                                    @if ($mahasiswa->isEmpty())
                                        <tr>
                                            <td colspan="5" class="text-center">Data Kosong</td>
                                        </tr>
                                    @endif
                                    @foreach ($mahasiswa as $siswa)
                                        <tr>
                                            <td>{{ $siswa->nim }}</td>
                                            <td>{{ $siswa->nama }}</td>
                                            <td>{{ $siswa->umur }}</td>
                                            <td>{{ $siswa->alamat }}</td>
                                            @if ($siswa->nilai == null)
                                                <td>Belum Ada Nilai</td>
                                            @else
                                                <td>{{ $siswa->nilai }}</td>
                                            @endif
                                            <td>{{ $siswa->alamat }}</td>
                                            <td>
                                                <a href="/nilai/{{ $siswa->nim }}" class="btn btn-info">Beri Nilai</a>
                                                <a href="/edit/{{ $siswa->nim }}" class="btn btn-warning">Edit</a>
                                                <form action="/hapus/{{ $siswa->nim }}" method="POST">
                                                    @csrf
                                                    <button class="btn btn-danger m-1"
                                                        onclick="return confirm('yakin?')">Hapus</button>
                                                </form>
                                                {{-- <a href="/hapus/{{ $siswa->nim }}" class="btn btn-danger">Hapus</a> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
