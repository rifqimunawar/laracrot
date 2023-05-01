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

<div class="{{ $errors->has('category_id') ? ' has-error' : '' }}">
  <label for="category_id">Category</label>
  <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
      @foreach($categories as $key => $value)
          <option value="{{ $key }}" 
          @if(isset($post)) 
            @if($key === $post->category_id) selected 
            @endif 
          @endif>
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

{{-- CHECKBOX --}}

<div class="row mb-3">
  <legend class="col-form-label col-sm-2 pt-0">Tags</legend>
  <div class="col-sm-10">
      @foreach($tags as $key => $value)
    <div class="form-check">
      <input name="tags[]" class="form-check-input" type="checkbox" id="gridCheck1" value="{{ $key }}" 
          @if(isset($post)) 
              @if(in_array($key, $post->tags->pluck('id')->all(), true)) checked @endif 
          @endif ><label class="form-check-label" for="gridCheck1">
          {{ $value }}
      </label>
    </div>
		@endforeach
  </div>
</div>

{{-- CHECKBOX END --}}

<div class="form-group{{ $errors->has('image') ? ' has-error ':''}}">
  <div class="input-group">
      <div class="custom-file">
          <label class="custom-file-label" for="image">Image</label>
					<input type="file" name="image" class="form-control" id="image" class="mb-3" id="image">
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


@auth 
  @if (in_array(auth()->user()->role_id, [1, 2]))
    <div class="form-group">
      <label>Active: *</label>
      <label class="radio-inline">
          <input id="yes" name="active" type="radio" value="1" @if(isset($post->active)) @checked($post->active === 1) @endif> Yes
      </label>
      <label class="radio-inline">
          <input id="no" name="active" type="radio" value="0" checked @if(isset($post->active)) @checked($post->active === 0) @endif> No
      </label>
    </div>
  @endif
@endauth
