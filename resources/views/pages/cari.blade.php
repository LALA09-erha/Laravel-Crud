@extends('layouts.tamplate', ['title' => 'Tampil Data'])
@section('content')
    <div class="row justify-content-center">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-11">
            <div class="container justify-content-center text-center">
                <h1>Tampil Data</h1>
                <form>
                    @csrf
                    <input type="hidden" class="form-control" value="{{ $mahasiswa->nim }}" name="nimold" readonly>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" value="{{ $mahasiswa->nim }}"
                            placeholder="Masukkan NIM" name="nim" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" value="{{ $mahasiswa->nama }}"
                            placeholder="Masukkan Nama" name="nama" readonly>
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="number" class="form-control" id="umur" value="{{ $mahasiswa->umur }}"
                            placeholder="Masukkan Umur" name="umur" readonly>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" value="{{ $mahasiswa->alamat }}"
                            placeholder="Masukkan Alamat" name="alamat" readonly>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
