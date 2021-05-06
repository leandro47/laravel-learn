@extends('admin.layouts.app')

@section('title', 'Create')

@section('content')

<h1>Novo</h1>

<form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
    @include('admin.posts._partials.form')
</form>

@endsection