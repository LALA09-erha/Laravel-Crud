@extends('layouts.tamplate', ['title' => 'Beri Nilai'])
@section('content')
    <div class="row justify-content-center">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-11">
            <div class="container justify-content-center text-center">
                <h1>Beri Nilai</h1>
                <form action="/prosesnilai" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nilai">Nilai</label>
                        <input type="number" class="form-control" id="nilai" min="1" max="100"
                            value="{{ $mahasiswa->nilai }}" placeholder="Masukkan Nilai" name="nilai" required>
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" value="{{ $mahasiswa->nim }}"
                            placeholder="Masukkan NIM" name="nim" required readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" value="{{ $mahasiswa->nama }}"
                            placeholder="Masukkan Nama" name="nama" required readonly>
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="number" class="form-control" id="umur" value="{{ $mahasiswa->umur }}"
                            placeholder="Masukkan Umur" name="umur" required readonly>
                    </div>


                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" value="{{ $mahasiswa->alamat }}"
                            placeholder="Masukkan Alamat" name="alamat" required readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
