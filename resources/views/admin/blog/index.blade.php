@extends('layouts.app')

@section('content')
<div class="container">
  <a href="{{route('blog.create')}}" class="btn">Create New</a>
  @if(session('status'))
    <div class="alert alert-info">
      {{session('status')}}
    </div>
  @endif
    <table class="table">
      <thead>
        <tr>
          <th>Title</th>
          <th>Author</th>
          <th>Slug</th>
          <th>Published</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($model as $blog)
          <tr>
            <td><a href="{{route('blog.edit',['post'=>$blog->id])}}">{{$blog->title}}</a></td>
            <td>{{$blog->user()->first()->name}}</td>
            <td>{{$blog->slug}}</td>
            <td></td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{$model->links()}}
</div>
<form id="delete-form" action="" method="POST">
  {{method_field('DELETE')}}
  {!! csrf_field() !!}
</form>
@endsection
