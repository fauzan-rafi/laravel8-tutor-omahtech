@extends('layouts.app',['title' => 'Show'])

@section('content')

    @foreach ($posts as $post)
        <div class="container">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">
                        {{ $post->body }}
                    </p>
                    <a href="#" class="card-link">Update</a>
                    <a href="#" class="card-link text-denger">Delete</a>
                </div>
            </div>
        </div>
    @endforeach
    

@endsection
