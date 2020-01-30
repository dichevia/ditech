<label>Category</label>
<input type="text" name="name" autocomplete="off" value="{{ old('name') ?? $category->name }}"/>
@csrf

