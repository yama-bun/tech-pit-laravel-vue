@csrf
<div class="md-form">
    <label for="title">タイトル</label>
    <input type="text" name="title" id="title" class="form-control" value="{{ $article->title ?? old('title') }}">
</div>
<div class="form-group">
    <article-tags-input
        :initial-tags='@json($tagNames ?? [])'
        :autocomplete-items='@json($allTagNames ?? [])'
    >

    </article-tags-input>
</div>
<div class="form-group">
    <label for=""></label>
    <textarea name="body" required class="form-control" rows="16" placeholder="本文">{{ $article->body ?? old('body') }}</textarea>
</div>
