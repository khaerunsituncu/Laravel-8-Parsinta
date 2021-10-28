<div class="mb-2">
    <input class="form-control @error('list') is-invalid @enderror" type="text" name="list"
        placeholder="The Name of Task" value="{{ old('list', $task->list) }}">
    @error('list')
    <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>
<button class="btn btn-primary" type="submit">{{ $submit }}</button>