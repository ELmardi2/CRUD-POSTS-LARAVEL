@extends('layout.default')

@section('title', 'create-post')

@section('content')
<h1 class="my-5 text-center">Update The Post</h1>
@if ($errors->all())
<div class="alert-danger">
        @foreach ($errors->all() as $error)
        <li>
            {{$error}}
         </li> 
     @endforeach
</div>
@endif
@if (session()->has('message'))
    <div class="alert alert-success">
        {{session()->get('message')}}
    </div>
@endif
<form action="{{route('posts.update', $post->id)}}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
<div class="form-group">
    <label for="title">Title</label>
<input type="text" name="title"  id="title" class="form-control" value="{{$post->title}}">
</div>
<div class="form-group">
    <label for="details">Details</label>
    <textarea name="details"  id="details" class="form-control" cols="30" rows="10">{{$post->details}}</textarea>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-outline-primary"> Update The Post</button>
</div>
</form>
@stop