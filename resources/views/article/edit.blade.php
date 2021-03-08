@extends('layout.app')
@section('content')
    <h1>Edit Article Menariquee</h1>

    <form action="{{ route('article.update', $article->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <x-input field="title" label="Judul" type="text" placeholder="Isi Judul Artikel.." value="{{ $article->title }}" />
        <x-textarea field="subject" label="subject" value="{{ $article->subject }}" />
        <img src="{{$article->thumbnail ? '/image/'. $article->thumbnail : '/image/default.png'}}" width="150px" height="175px">
        <x-file field="thumbnail" label="thumbnail"/>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
