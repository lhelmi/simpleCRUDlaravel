@extends('layout.app')
@section('content')
    <h1>{{ $article->title }}</h1>
    <p>
        {{$article->subject}}
    </p>

    <a href="{{ route('article.edit', $article->id) }}" class="btn btn-info btn-sm">
        Edit
    </a>
    <form action="{{ route('article.destroy', $article->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">
            Delete
        </button>
    </form>
    <a href="{{ route('article.index') }}" class="btn btn-info btn-sm">Kembali</a>
    @include('layout.footer')
@endsection
