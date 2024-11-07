<div class="form-group mb-3">
    <label for="{{ $name }}" class="form-label">
        {{ $label }}
        @if(isset($required)) <span class="text-danger">*</span> @endif
    </label>
    <select 
        id="{{ $name }}" 
        name="{{ $name }}" 
        aria-required="{{ isset($required) ? 'true' : 'false' }}"
        class="form-select @error($name) is-invalid @enderror"
    >
        <option selected disabled>Selecione...</option>
        @foreach($options as $option)
            <option value="{{ $option->id }}" {{ $value == $option->id ? 'selected' : '' }}>
                {{ $option->{$display} }}
            </option>
        @endforeach
    </select>
    @error($name)
        <div id="{{ $name }}-error" class="invalid-feedback" aria-live="polite">
            {{ $message }}
        </div>
    @enderror
</div>
