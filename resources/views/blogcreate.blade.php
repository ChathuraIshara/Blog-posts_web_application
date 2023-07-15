@extends('layout')
@section('title','create')
@section('content')
<mark>
    <div class="w-4/5 m-auto text-left">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-center">
                Create a post
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="text-center">
            @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}

            </div>
            @endforeach
        </div>
        <div style="width:600px">
            <form action="/blogstore" method="post" enctype="multipart/form-data">
                @csrf
                Title<br>
                <input type="text" name="title" class="form-control" placeholder="title"><br>
                Description<br>
                <textarea type="text" name="desc" class="form-control" placeholder="description"></textarea><br>
                <input type="file" name="img"><br><br>
                <input type="submit" class="btn btn-primary">
            </form>
        </div>

    </div>

</mark>
@endsection