@extends('layouts.main')

@section('container')
<h1>Halaman About</h1>
<p>Name: {{ $name }}</p>
<p>Email: {{ $email }}</p>
<img src="img/{{ $image }}" alt="{{ $name }}" width="200"class="img-thumbnail rounded-circle">
@endsection
