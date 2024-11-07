<div class="form-check">
    <input
        type="checkbox"
        name="{{ $name }}"
        id="{{ $name }}"
        class="form-check-input @error($name) is-invalid @enderror"
        {{ $checked ? 'checked' : '' }}
        {{ $attributes }}
    >
    <label for="{{ $name }}" class="form-check-label">{{ $label }}</label>

    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
