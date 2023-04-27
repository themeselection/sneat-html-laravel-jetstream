@props(['active'])

@php
$classes = ($active ?? false)
            ? 'd-block w-100 ps-1 pe-2 py-2 border-start border-primary text-left fw-semibold text-primary bg-light-primary'
            : 'd-block w-100 ps-1 pe-2 py-2 border-start border-transparent text-left fw-semibold text-body';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
