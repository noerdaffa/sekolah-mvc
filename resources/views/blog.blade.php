@extends('layout')

@section('content')

<h2>Halaman Blog</h2>

@foreach($artikel as $a)

<h3>{{ $a['judul'] }}</h3>

<p>{{ $a['isi'] }}</p>

@endforeach

@endsection
