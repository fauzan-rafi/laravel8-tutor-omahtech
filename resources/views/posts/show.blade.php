@extends('layouts.app',['title' => 'Show'])

@section('content')

    @foreach ($posts as $post)
        <div class="container">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/'.$post->thumbnail ) }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">
                        {{ $post->body }}
                    </p>
                    <a href="/posts/edit/{{ $post->id }}" class="btn btn-primary">Update</a>
                    <form action="/posts/delete/{{ $post->id }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger" >Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    

@endsection
