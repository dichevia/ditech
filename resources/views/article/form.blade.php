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
@csrf
