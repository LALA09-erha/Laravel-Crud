@extends('layouts.tamplate', ['title' => 'Tambah Data'])
@section('content')
    <div class="row justify-content-center">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-11">
            <div class="container justify-content-center text-center">
                <h1>Tambah Data</h1>
                <form action="/prosestambah" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="number" class="form-control" id="umur" placeholder="Masukkan Umur" name="umur"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
