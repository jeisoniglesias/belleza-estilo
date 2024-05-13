@props(['active', 'icon'])

@php
$classes = ($active?? false)
? 'list-group-item list-group-item-action border-0 d-flex align-items-center active'
: 'list-group-item list-group-item-action border-0 d-flex align-items-center';
$iconClasses = $icon ?? 'bi-border-all';

@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    @if($active)
    <span class="ms-2">{{ $slot }}</span>
    <span class="bi {{ $iconClasses }} ms-auto"></span>
    @else
    <span class="bi {{ $iconClasses }}"></span>
    <span class="ms-2">{{ $slot }}</span>
    @endif
</a>