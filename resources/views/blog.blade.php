@extends('layouts.main')

@section('container')
    {{-- Buat perulangan untuk menampilkan data blog --}}
    @foreach ($post as $pos)
        <h2>
            <a href="/blog/{{ $pos['slug'] }}">
                {{ $pos['title'] }}
            </a>
        </h2>
        <h4>{{ $pos['author'] }}</h4>
        <p>{{ $pos['body'] }}</p>
    @endforeach
    {{-- Akhir perulangan data  --}}
@endsection
