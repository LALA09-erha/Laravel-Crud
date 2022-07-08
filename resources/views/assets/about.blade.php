@extends('layouts.tamplate', ['title' => 'About', 'about' => 'active'])
@section('content')
    <div class="row justify-content-center">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-11">
            <div class="container justify-content-center text-center">
                <h3>Biodata</h3>
                <img src="{{ asset('img/fikri.jpg') }}" width="100" alt="">
                <h3>Nama</h3>
                <span>Fikri Ainun Najib</span>
                <h3>NIM</h3>
                <span>200411100153</span>
                <h3>Golongan Darah</h3>
                <span>A</span>
                <h3>Agama</h3>
                <span>Islam</span>
                <h3>Hobi</h3>
                <span>Bermain Game</span>
            </div>
        </div>
    </div>
@endsection
