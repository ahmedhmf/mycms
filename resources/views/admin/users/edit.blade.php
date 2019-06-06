@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Edit {{$model->name}}</h1>
  <form class="" action="{{route('users.update',['model'=>$model->id])}}" method="post">
    {{method_field('PUT')}}
    @include('admin.users.partials.fields')
  </form>
</div>
@endsection
