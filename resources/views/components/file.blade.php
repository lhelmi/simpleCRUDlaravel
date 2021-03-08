<div class="form-group">
    <label for="{{ $field }}">{{ $label }}</label>
    <input type="file" class="form-control-file" id={{ $field }} name={{ $field }}>
    @error($field)
        <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
</div>
