<br>
<label>
    Title
    <input name="title" type="text" value="{{ old('title', $post->title) }}">
    @error('title')
        <br>
        <small style="color: red">{{ $message }}</small>
    @enderror
</label>
<br>
<br>
<label>
    Body
    <textarea name="body">{{ old('body', $post->body) }}</textarea>
    @error('body')
        <br>
        <small style="color: red">{{ $message }}</small>
    @enderror
</label>
<br>
