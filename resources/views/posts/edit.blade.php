@extends('layouts.app',['title' => 'Update Post'])

@section('content')
    <form method="POST" action="/posts/update/{{ $post->id }}" enctype="multipart/form-data">
        @method('patch')
        @csrf
        @include('posts.partial.form')
    </form>
    
@endsection