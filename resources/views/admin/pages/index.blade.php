@extends('layouts.app')

@section('content')
<div class="container">
  <a href="{{route('pages.create')}}" class="btn">Create New</a>
  @if(session('status'))
    <div class="alert alert-info">
      {{session('status')}}
    </div>
  @endif
    <table class="table">
      <thead>
        <tr>
          <th>Title</th>
          <th>URL</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pages as $page)
          <tr>
            <td><a href="{{route('pages.edit',['page'=>$page->id])}}">{{$page->title}}</a></td>
            <td>{{$page->uri}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{$pages->links()}}
</div>
@endsection
