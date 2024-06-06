@props(['producto'])

@php
$now = \Carbon\Carbon::now();
$createdAt = \Carbon\Carbon::parse($producto->created_at);
$tagCardText = "";
$tagCardClass = "";
if($createdAt->isSameDay($now)){
$tagCardText = "new";
$tagCardClass = "bg-green";
}
if($producto->stock === 0){
$tagCardText = "out of stock";
$tagCardClass = "bg-black";
}
if($producto->oferta){
$tagCardText = "sale";
$tagCardClass = "bg-red";
}

@endphp

<div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
    <div class="product">
        <img src="{{ $producto->thumbnail }}" alt="">
        <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
            <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
            <li class="icon mx-3"><span class="far fa-heart"></span></li>
            <li class="icon"><span class="fas fa-shopping-bag"></span></li>
        </ul>
    </div>

    @if($tagCardText && $tagCardClass)
    <div class="tag {{$tagCardClass}}">{{$tagCardText}}</div>
    @endif
    <div class="title pt-4 pb-1">{{ $producto->nombre }}</div>
    <div class="d-flex align-content-center justify-content-center">
        <div class="subcategory">
            <small>{{ $producto->subcategoria->nombre }}</small>
        </div>
        <div class="separator mx-2"></div>
        <div class="target"><small>{{ $producto->publicTarget->name }}</small></div>
    </div>
    <div class="price">{{ $producto->precio }}</div>
</div>