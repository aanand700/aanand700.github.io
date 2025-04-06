<div class="mb-3">
    <label for="{{ $name }}" class="col-form-label">{{ $label }}</label>
    <select class="form-control" name="{{ $name }}" required>
        <option value="">Select a {{ $label }}</option>
        @foreach ($value as $option)
            <option value="{{ $option }}" {{ auth()->user()->userDetails->state == $option ? 'selected' : '' }}>
                {{ $option }}</option>
        @endforeach
    </select>
</div>
