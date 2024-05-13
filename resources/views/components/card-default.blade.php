@props(['title'])
@php
$classes = 'card w-100';
@endphp
<div {{ $attributes->merge(['class' => $classes]) }}>
    <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4">{{$title}}</h5>
        {{$slot}}
    </div>
</div>