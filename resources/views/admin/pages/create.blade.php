@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Create Page</h1>
  <form class="" action="{{route('pages.store')}}" method="post">
      @include('admin.pages.partials.fields')
  </form>
</div>
@endsection
