@php($id = Str::uuid())

<div class="form-check">
    <input class="form-check-input" type="checkbox" id={{ $id }}
        {{ $attributes->merge([
            'value' => 1,
            'checked' => !!request()->old($attributes->get('name')),
        ]) }}>
    <label for="{{ $id }}" class="form-check-label">
        {{ $slot }}
    </label>
</div>
