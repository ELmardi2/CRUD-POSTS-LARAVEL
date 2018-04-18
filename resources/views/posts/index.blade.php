@extends('layout.default')

@section('title', 'Posts')

@section('content')
<h1>All Posts Here !!!!!</h1>
@foreach ($posts as $post )
  <div class="card mt-4">
      <div class="card-body">
          <h3>
              <a href="{{route('posts.show', $post->id)}}">
                  {{$post->title}}
              </a>
            <a  href="{{route('posts.edit', $post->id)}}" class="btn btn-secondary">Edit !</a>
            <form action="{{route('posts.destroy', $post->id)}}" method="POST"
            onsubmit="return confirm('Are You Sure that you want delete this post !?')" class="d-inline-block" action="{{route('posts.destroy', $post->id)}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </h3>
      </div>
      </div>  
@endforeach
{{$posts->links()}}
@endsection