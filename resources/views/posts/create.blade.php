@extends('layouts.app',['title' => 'New Post'])

@section('content')

    <form method="POST" action="/posts/store" enctype="multipart/form-data">
        @csrf
        @include('posts.partial.form');
    </form>
    
@endsection