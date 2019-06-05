@extends('layouts.app')

@section('content')
<div class="container">
  <a href="{{route('pages.create')}}" class="btn">Creat New</a>
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
</div>
@endsection
