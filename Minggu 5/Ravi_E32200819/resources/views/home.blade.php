@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluide">
        <div class="container">
            <h1 classs="display-4">Halaman Depan</h1>
            <p class="lead"> Ini Adalah Halaman depan</p>
        </div>
        <p>Nama : {{ $nama }}</p>
        <p>NIM : {{ $nim }}</p>
        <p>Mata pelajaran</p>
        <ul>
            @foreach($pelajaran as $p)
            <li>{{ $p }}</li>
            @endforeach
    </div>
@endsection