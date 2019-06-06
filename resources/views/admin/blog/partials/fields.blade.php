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
  <input type="text" class="form-control" name="title" value="{{$model->title}}" id="title">
</div>

<div class="form-group">
  <label for="slug">Slug</label>
  <input type="text" class="form-control" name="slug" value="{{$model->slug}}" id="slug">
</div>

<div class="form-group">
  <label for="published">Published Date</label>
  <input type="text" class="form-control" name="published" value="{{$model->published}}" id="published">
</div>

<div class="form-group">
  <label for="excerpt">Excerpt</label>
  <textarea name="excerpt" rows="8" cols="80" class="form-control" id="excerpt">{{$model->excerpt}}</textarea>
</div>


<div class="form-group">
  <label for="body">Body</label>
  <textarea name="body" rows="8" cols="80" class="form-control" id="body">{{$model->body}}</textarea>
</div>

<div class="form-group">
  <input type="submit" class="btn btn-default" value="Submit">
</div>
