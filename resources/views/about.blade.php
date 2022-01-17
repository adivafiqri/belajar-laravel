@extends('layouts.main')


@section('container')
    <h1>Halaman About</h1>

    <h3>{{ $name }}</h3>
    <span>{{ $email }}</span>
    <img src="img/ {{ $image }}" alt="{{ $name }}">
@endsection