@extends('layout.default')

@section('title', 'showposts')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>{{$post->title}}</h1>
    </div>
    <div class="card-body">
        <p>
            {{$post->details}}
        </p>
    </div>
</div>
@stop