@props(['active', 'icon'])

@php
$classes = ($active?? false)
? 'list-group-item list-group-item-action border-0 d-flex align-items-center active px-4'
: 'list-group-item list-group-item-action border-0 d-flex align-items-center px-4 bg-transparent text-dark';
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

