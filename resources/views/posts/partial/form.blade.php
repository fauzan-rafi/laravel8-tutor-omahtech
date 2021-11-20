<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}">
</div>

<div class="mb-3">
    <label for="formFile" class="form-label">Image</label>
    <input class="form-control" type="file" id="formFile" name="thumbnail">
</div>

<div class="mb-3">
    <label for="body" class="form-label"> Body </label>
    <textarea name="body" id="body" class="form-control" cols="30" rows="10">{{ $post->body }}</textarea>
</div>
<button class="btn btn-primary" type="submit" > Submit </button>