<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
  <label for="title">Title</label>
  <input type="text" name="title"
          class="form-control @error('title') is-invalid @enderror" id="title"
          placeholder="Title"
          @if(isset($post->title))value="{{ $post->title }}@endif">
  @if ($errors->has('title'))
      <span class="help-block">
              <strong class="text-danger">{{ $errors->first('title') }}</strong>
      </span>
  @endif
</div>

<div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
  <label for="content">Content</label>
  <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="content" rows="7"
            placeholder="Content ...">@if(isset($post->content))
          {{ $post->content }}
      @endif</textarea>
  @if ($errors->has('content'))
      <span class="help-block">
          <strong class="text-danger">{{ $errors->first('content') }}</strong>
      </span>
  @endif
</div>

<div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
  <label for="category_id">Category</label>
  <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
      @foreach($categories as $key => $value)
          <option value="{{ $key }}" @if(isset($post)) @if($key === $post->category_id) selected @endif @endif>
              {{ $value }}
          </option>
      @endforeach
  </select>
  @if ($errors->has('category_id'))
      <span class="help-block">
          <strong class="text-danger">{{ $errors->first('category') }}</strong>
      </span>
  @endif
</div>

<div class="form-group{{ $errors->has('tags[]') ? ' has-error' : '' }}">
  <label for="tags">Tags</label>
  <select name="tags[]" id="tags" class="select2" multiple="multiple"
          data-placeholder="Choose tags" style="width: 100%;">
      @foreach($tags as $key => $value)
          <option value="{{ $key }}"
                  @if(isset($post)) @if(in_array($key, $post->tags->pluck('id')->all(), true)) selected @endif @endif>
              {{ $value }}
          </option>
      @endforeach
  </select>
  @if ($errors->has('tags[]'))
      <span class="help-block">
          <strong class="text-danger">{{ $errors->first('tags[]') }}</strong>
      </span>
  @endif
</div>

<div class="form-group{{ $errors->has('image') ? ' has-error ':''}}">
  <label for="image">Image</label>
  <div class="input-group">
      <div class="custom-file">
          <input type="file" name="image" id="image" class="custom-file-input">
          <label class="custom-file-label" for="image">Choose file</label>
      </div>
  </div>
  @if(isset($post) && $post->image !== null)
      <img id="preview_image"
            src="{{ asset('storage/img/' . $post->image) }}"
            class="img-thumbnail mt-2"
            height="150"
            width="150"
            alt="..."/>
  @endif
  @if ($errors->has('image'))
      <span class="help-block">
          <strong class="text-danger">{{ $errors->first('image') }}</strong>
      </span>
  @endif
</div>

<div class="form-group">
  <label>Active:</label>
  <label class="radio-inline">
      <input id="yes" name="active" type="radio" value="1" checked @if(isset($post->active)) @checked($post->active === 1) @endif> Yes
  </label>
  <label class="radio-inline">
      <input id="no" name="active" type="radio" value="0" @if(isset($post->active)) @checked($post->active === 0) @endif> No
  </label>
</div>
