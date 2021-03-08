@extends('layout.app')
@section('title', 'Halaman Article')
@section('content')
    <h1>Ini halaman artikel</h1>

    @foreach ($articles->chunk(3) as $articleChunk)
        <div class="row ">
            @foreach ($articleChunk as $article)
                <div class="col mb-1 ml-1">
                    <img src="{{$article->thumbnail ? '/image/'. $article->thumbnail : 'image/default.png'}}" width="150px" height="175px">
                    <div class="card-body">
                        <p><b>{{ Str::ucfirst($article->title) }}</b></p>
                        <p>Isi : {{ $article->subject }}</p>
                        <a href="{{ route('article.show', $article->slug) }}" class="btn btn-success btn-sm">
                            Detail
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach

    <div>
        {{ $articles->links()  }}
    </div>

    @include('layout.footer')
@endsection
