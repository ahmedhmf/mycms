@extends('layouts.frontend')

@section('content')
<div class="container">
  @foreach($posts as $post)
    <article class="">
      <h2>
        <a href="#">{{$post->title}}</a>
      </h2>
      <p>
        {{$post->excerpt}}
      </p>
    </article>
  @endforeach
</div>
@endsection
