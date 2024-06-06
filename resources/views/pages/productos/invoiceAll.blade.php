@extends('layouts.dashboard')

@section('content')
<div class="container px-4">
    <div class="row gx-5">
        <div class="col-12 col-sm-8">
            @foreach ($cart as $item)

            <div class="list-group-item list-group-item-action  ">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="{{ $item['photo'] }}" alt="{{ $item['name'] }}" class="img-thumbnail ">
                    </div>
                    <div class="col-sm-9">
                        <div class="row">

                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{ $item['name'] }}</h5>
                                <div class="counter mt-2">
                                    <button class="btn btn-secondary">-</button>
                                    <input type="number" id="quantity" name="quantity" value="1" min="1" max="" readonly class="btn btn-outline-secondary">
                                    <button class="btn btn-secondary">+</button>
                                </div>

                            </div>
                            @isset($item['subcategoria'])
                            <p class="mb-1">{{ $item['subcategoria'] }}</p>
                            @endisset

                            <div class="container mt-0">
                                <div class="row">
                                    <div class="col-6 ">
                                        <form method="POST" action="{{ route('productos.cart.remove',$item['id']) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn bg-transparent fst-italic" type="submit">
                                                Eliminar
                                            </button>
                                        </form>
                                    </div>
                                    <div class="col-6">
                                        <form method="POST" action="{{ route('productos.invoice',['product_id' => $item['id'],'quantity'=>$item['quantity']]) }}">
                                            @csrf
                                            <button class="btn bg-transparent fst-italic" type="submit">Comprar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="col-12 col-sm-4">
            <div class="p-3 h-auto">campos cliente</div>
        </div>
    </div>
</div>
@endsection