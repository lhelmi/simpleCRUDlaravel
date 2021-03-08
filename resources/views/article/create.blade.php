@extends('layout.app')
@section('content')
    <h1>Bikin Article Menariquee</h1>

    <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-input field="title" label="Judul" type="text" placeholder="Isi Judul Artikel.." />
        <x-textarea field="subject" label="subject"/>
        <x-file field="thumbnail" label="thumbnail"/>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
