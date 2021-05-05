@extends('admin.layouts.app')

@section('title', 'Edit')

@section('content')

<h1>Editar o post</h1>

<form action="{{ route('posts.update', $post->id) }}" method="post">
    @method('put')
    @include('admin.posts._partials.form')
</form>

@endsection