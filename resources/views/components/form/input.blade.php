<div class="form-group mb-3">
    <label for="{{ $name }}" class="form-label">
        {{ $label }}
        @if(isset($required)) <span class="text-danger">*</span> @endif
    </label>
    <input 
        type="{{ $type ?? 'text' }}" 
        id="{{ $name }}" 
        name="{{ $name }}" 
        value="{{ $value ?? '' }}" 
        aria-required="{{ isset($required) ? 'true' : 'false' }}"
        class="form-control @error($name) is-invalid @enderror"
    >
    @error($name)
        <div id="{{ $name }}-error" class="invalid-feedback" aria-live="polite">
            {{ $message }}
        </div>
    @enderror
</div>
