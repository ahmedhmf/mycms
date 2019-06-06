{!! csrf_field() !!}

@if(!$errors->isEmpty())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $message)
      <li>{{$message}}</li>
      @endforeach
    </ul>
  </div>
@endif

<div class="form-group">
  <label for="name">Name</label>
  <input type="text" class="form-control" name="name" value="{{$model->name}}" id="title">
</div>

<div class="form-group">
  <label for="email">Email</label>
  <input type="text" class="form-control" name="email" value="{{$model->email}}" id="uri">
</div>

@foreach($roles as $role)
<div class="checkbox">
  <label for="">
    <input type="checkbox" name="roles[]" value="{{$role->id}}" {{$model->hasRole($role->name)?'checked':''}}/>
    {{$role->name}}
  </label>
</div>
@endforeach

<div class="form-group">
  <input type="submit" class="btn btn-default" value="Submit">
</div>
