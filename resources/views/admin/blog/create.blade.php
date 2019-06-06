@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Create Post</h1>
  <form class="" action="{{route('blog.store')}}" method="post">
      @include('admin.blog.partials.fields')
  </form>
</div>
@endsection
