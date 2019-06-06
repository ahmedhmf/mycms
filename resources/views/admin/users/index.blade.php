@extends('layouts.app')

@section('content')
<div class="container">
  <a href="{{route('pages.create')}}" class="btn">Creat New</a>
  @if(session('status'))
    <div class="alert alert-info">
      {{session('status')}}
    </div>
  @endif
    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Roles</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($model as $user)
          <tr>
            <td><a href="{{route('users.edit',['model' => $user->id])}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{implode(' , ' , $user->roles()->get()->pluck('name')->toArray())}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{ $model->links() }}
</div>
@endsection
