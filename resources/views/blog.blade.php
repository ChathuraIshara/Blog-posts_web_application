@extends('layout')
@section('title','blog')
@section('content')
<div class="w-full bg-light">
  <div class="container py-8">
    <div class="border-b border-gray-200 text-center">
      <h1 class="text-10xl font-bold" style="font-size:50px">Blog Posts</h1>
    </div>
  </div>
  @if(session()->has('message'))
  <div class="container mt-4">
    <div class="alert alert-success" role="alert">
      {{session()->get('message')}}
    </div>
  </div>
  @endif
  @if(Auth::check())
  <div class="container py-4 flex justify-end">
    <a href="/blogcreate" class="btn btn-primary">Create</a>
  </div>
  @endif
  <div class="container">
    @foreach($posts as $post)
    <div class="flex items-center justify-center py-8 border-b border-gray-200">
      <div class="w-1/2">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">{{$post->title}}</h2>
        <img src="{{asset('images/' . $post->img_path)}}" class="w-full h-auto rounded-lg object-cover mb-4" alt="Post Image">
      </div>
      <div class="w-1/2 px-8">
        <p class="text-gray-600 mb-2">
          By <span class="font-semibold"><b>{{$post->user->name ?? 'Unknown'}}</b></span>, Created on {{date('jS M Y', strtotime($post->updated_at))}}
        </p>
        <p class="text-gray-700 leading-relaxed mb-4">{{$post->description}}</p>
        <div class="flex flex-col space-y-1">
          <a href="/blogread/{{$post->id}}" class="btn btn-primary my-2">Read More</a>
          @if(Auth::check() && auth()->user()->id == $post->user_id)
          <a href="/blogedit/{{$post->id}}" class="btn btn-secondary my-2">Edit</a>
          <a href="/blogdelete/{{$post->id}}" class="btn btn-danger my-2">Delete</a><br>
          @endif
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>




@endsection