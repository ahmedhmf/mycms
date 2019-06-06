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
  <label for="title">Title</label>
  <input type="text" class="form-control" name="title" value="{{$modal->title}}" id="title">
</div>

<div class="form-group">
  <label for="uri">URL</label>
  <input type="text" class="form-control" name="uri" value="{{$modal->uri}}" id="uri">
</div>

<div class="form-group">
  <label for="content">Content</label>
  <textarea name="content" rows="8" cols="80" class="form-control" id="content">{{$modal->content}}</textarea>
</div>

<div class="form-group">
  <input type="submit" class="btn btn-default" value="Submit">
</div>
