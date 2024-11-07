<div class="form-group mb-3">
    <label for="{{ $name }}" class="form-label">
        {{ $label }}
        @if(isset($required) && $required) <span class="text-danger">*</span> @endif
    </label>
    <textarea 
        id="{{ $name }}" 
        name="{{ $name }}" 
        rows="5"
        aria-required="{{ isset($required) && $required ? 'true' : 'false' }}"
        class="form-control @error($name) is-invalid @enderror"
        {{ $attributes }}
    >{{ old($name, $value ?? $slot) }}</textarea>
    @error($name)
        <div id="{{ $name }}-error" class="invalid-feedback" aria-live="polite">
            {{ $message }}
        </div>
    @enderror
</div>
