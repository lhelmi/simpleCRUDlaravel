<div class="mb-3">
    <label for="{{ $field }}" class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $field }}" class="form-control" id="{{ $field }}" placeholder="{{ $placeholder ?? '' }}" @isset($value) value="{{ old($field) ? old($field) : $value }}" @else value="{{ old($field) }}" @endisset >
      @error($field)
          <div class="alert alert-danger mt-1">{{ $message }}</div>
      @enderror
  </div>
