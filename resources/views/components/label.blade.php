@props(['value'])

<label {{ $attributes->merge(['class' => 'form-label mb-0']) }}>
    {{ $value ?? $slot }}
</label>