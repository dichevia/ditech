<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') ?? $article->title ?? ''}}">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" name="description" id="description" value="{{ old('description') ?? $article->description ?? ''}}">
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control" name="content" id="content" rows="3">{{ old('content') ?? $article->content ?? ''}}</textarea>
  </div>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <label class="input-group-text" for="inputGroupSelect01">Category</label>
    </div>
    <select class="custom-select" id="category" name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}"
                @isset($article)
                @if ($category->id == $article->category_id)
                selected="selected"
                @endif
                @endisset
                >{{ $category->name }}</option>
        @endforeach
    </select>
  </div>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Image</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" name="image" id="inputGroupFile01">
    <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
  </div>
</div>
@csrf
