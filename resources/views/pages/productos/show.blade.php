@extends('layouts.dashboard')

@section('content')
<style>
    .carousel-item {
        width: 100%;
    }

    .price span {
        font-size: 18px;
    }

    .cut {
        text-decoration: line-through;
        color: red;
    }

    .icons i {
        font-size: 17px;
        color: green;
        margin-right: 2px;
    }

    .offers i {
        color: green;
    }

    .delivery i {
        color: blue;
    }

    label.radio {
        cursor: pointer;
    }

    label.radio input {
        position: absolute;
        top: 0;
        left: 0;
        visibility: hidden;
        pointer-events: none;
    }

    label.radio span {
        padding: 2px 11px;
        margin-right: 3px;
        border: 1px solid #8f37aa;
        display: inline-block;
        color: #8f37aa;
        border-radius: 3px;
        text-transform: uppercase;
    }

    label.radio input:checked+span {
        border-color: #8f37aa;
        background-color: #8f37aa;
        color: #fff;
    }
</style>
<div class="container ">
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-5 ">
                <img src="{{ $producto->thumbnail }}" alt="" class="img-thumbnail w-100 d-block">


            </div>
            <div class="col-md-7 h-auto">
                <div class="container h-100">
                    <h4>{{ $producto->nombre }}</h4>
                    <div class="price">
                        <span>$ {{ $producto->precio }}</span>

                    </div>
                    <form method="POST" action="{{ route('productos.cart',['product_id'=>$producto->id]) }}">
                        @csrf
                        <div class="d-flex align-items-center mt-4 offers mb-1">
                            <p>
                                {{ $producto->descripcion }}
                            </p>

                            <div class="container">
                                @if($producto->stock > 1)
                                <div class="counter mt-2">
                                    <button class="btn btn-secondary" onclick="decrement(event,'{{ $producto->id }}')">-</button>
                                    <input type="number" id="quantity-{{ $producto->id }}" name="quantity" value="1" min="1" max="{{ $producto->stock }}" readonly>
                                    <button class="btn btn-secondary" onclick="increment(event,'{{ $producto->id }}', '{{ $producto->stock }}')">+</button>
                                </div>

                                @endif
                            </div>
                        </div>

                        <div class="mt-3">
                            <button class="btn btn-dark mr-2" type="submit">
                                ADD TO CART
                            </button>
                            <button class="btn btn-success" type="button">BUY NOW</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function increment(e, id, max) {
        var quantityInput = document.getElementById('quantity-' + id);
        var currentValue = parseInt(quantityInput.value);
        e.preventDefault();
        if (currentValue < max) {
            quantityInput.value = currentValue + 1;
        }
    }

    function decrement(e, id) {
        var quantityInput = document.getElementById('quantity-' + id);
        var currentValue = parseInt(quantityInput.value);
        e.preventDefault();

        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
    }
</script>
@endsection