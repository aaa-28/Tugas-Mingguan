@extends('layouts.main')

@section('content')
    <h1>Berita</h1>

    @foreach ($berita as $item)
        <article class="mb-5">
            <h2>{{ $item['judul'] }}</h2>
            <h3>{{ $item['penulis'] }}</h3>
            <p>{{ $item['konten'] }}</p>
        </article>
    @endforeach
@endsection
