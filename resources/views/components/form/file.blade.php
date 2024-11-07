<div class="form-group mb-3">
    <label for="{{ $name }}" class="form-label">
        {{ $label }}
        @if(isset($required) && $required) <span class="text-danger">*</span> @endif
    </label>
    <input 
        type="file" 
        id="{{ $name }}" 
        name="{{ $name }}" 
        class="form-control @error($name) is-invalid @enderror" 
        {{ $attributes }}
    >
    @error($name)
        <div id="{{ $name }}-error" class="invalid-feedback" aria-live="polite">
            {{ $message }}
        </div>
    @enderror
</div>
