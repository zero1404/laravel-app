<div class="form-group mb-4">
    <label for="input{{ ucfirst($property) }}">{{ $name }}:</label>
    <select name="{{ $property }}" id="input{{ ucfirst($property) }}"
        class="form-control selectpicker @error($property) is-invalid @enderror">
        <option value="">Chọn {{ strtolower($name) }}</option>
        {{ $slot }}
    </select>
    @error($property)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>