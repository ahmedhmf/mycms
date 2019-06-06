@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Edit Page</h1>
  <form class="" action="{{route('blog.update',['blog'=>$model->id])}}" method="post">
    {{method_field('PUT')}}
    @include('admin.blog.partials.fields')
  </form>
</div>
@endsection
