<div class="mb-3">
    <label for="{{ $field }}" class="form-label">{{ $label }}</label>
    <textarea class="form-control" name="{{ $field }}" id="{{ $field }}" cols="30" rows="10">@isset($value){{old($field)?old($field):$value}}@else{{old($field)}}@endisset</textarea>
    @error($field)
          <div class="alert alert-danger mt-1">{{ $message }}</div>
      @enderror
</div>
