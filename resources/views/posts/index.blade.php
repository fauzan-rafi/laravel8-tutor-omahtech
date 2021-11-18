@extends('layouts.app',['title' => 'New Post'])

@section('content')
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Title</th>
          <th scope="col">Body</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
    
      @foreach ($posts as $post)
          <tr>
              <td> {{ $post->title}} </td>
              <td> {{ $post->body }} </td>
              <td>#</td>
          </tr>
      @endforeach
        
      </tbody>
  
    </table>
  
  

@stop