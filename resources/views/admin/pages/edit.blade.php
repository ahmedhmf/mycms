@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Edit Page</h1>
  <form class="" action="{{route('pages.update',['page'=>$modal->id])}}" method="post">
    {{method_field('PUT')}}
    @include('admin.pages.partials.fields')
  </form>
</div>
@endsection
