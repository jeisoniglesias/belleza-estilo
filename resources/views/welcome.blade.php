@extends('layouts.app')

@section('content')
<style>
    .nav-link-home {
        text-decoration: none!important;
        color: black;
    }

    .nav-link-home.active {
        border-bottom: 2px solid red;
    }
</style>
<div class="row">
    <div class="container my-0">
        <ul class="nav justify-content-end ">
            <!--TODO: add event button for filter method and update var products -->
            <li class="nav-item nav-item-home " >
                
                <a class="nav-link nav-link-home active" aria-current="page" href="#">Active</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link nav-link-home" href="#">Link</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link nav-link-home" href="#">Link</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link nav-link-home disabled" aria-disabled="true">Disabled</a>
            </li>

        </ul>
    </div>
    <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
        <div class="product"> <img src="https://images.pexels.com/photos/54203/pexels-photo-54203.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
            <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                <li class="icon mx-3"><span class="far fa-heart"></span></li>
                <li class="icon"><span class="fas fa-shopping-bag"></span></li>
            </ul>
        </div>
        <div class="tag bg-red">sale</div>
        <div class="title pt-4 pb-1">Winter Sweater</div>
        <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
        <div class="price">$ 60.0</div>
    </div>
    <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
        <div class="product"> <img src="https://images.pexels.com/photos/6764040/pexels-photo-6764040.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
            <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                <li class="icon mx-3"><span class="far fa-heart"></span></li>
                <li class="icon"><span class="fas fa-shopping-bag"></span></li>
            </ul>
        </div>
        <div class="tag bg-black">out of stock</div>
        <div class="title pt-4 pb-1">Denim Dresses</div>
        <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
        <div class="price">$ 55.0</div>
    </div>
    <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
        <div class="product"> <img src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
            <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                <li class="icon mx-3"><span class="far fa-heart"></span></li>
                <li class="icon"><span class="fas fa-shopping-bag"></span></li>
            </ul>
        </div>
        <div class="tag bg-green">new</div>
        <div class="title pt-4 pb-1"> Empire Waist Dresses</div>
        <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
        <div class="price">$ 70.0</div>
    </div>
    <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
        <div class="product"> <img src="https://images.pexels.com/photos/6311392/pexels-photo-6311392.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
            <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                <li class="icon mx-3"><span class="far fa-heart"></span></li>
                <li class="icon"><span class="fas fa-shopping-bag"></span></li>
            </ul>
        </div>
        <div class="title pt-4 pb-1">Pinafore Dresses</div>
        <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
        <div class="price">$ 60.0</div>
    </div>
</div>
<div class="row">
    <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
        <div class="product"> <img src="https://images.pexels.com/photos/54203/pexels-photo-54203.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
            <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                <li class="icon mx-3"><span class="far fa-heart"></span></li>
                <li class="icon"><span class="fas fa-shopping-bag"></span></li>
            </ul>
        </div>
        <div class="tag bg-red">sale</div>
        <div class="title pt-4 pb-1">Winter Sweater</div>
        <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
        <div class="price">$ 60.0</div>
    </div>
    <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
        <div class="product"> <img src="https://images.pexels.com/photos/6764040/pexels-photo-6764040.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
            <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                <li class="icon mx-3"><span class="far fa-heart"></span></li>
                <li class="icon"><span class="fas fa-shopping-bag"></span></li>
            </ul>
        </div>
        <div class="tag bg-black">out of stock</div>
        <div class="title pt-4 pb-1">Denim Dresses</div>
        <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
        <div class="price">$ 55.0</div>
    </div>
    <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
        <div class="product"> <img src="https://images.pexels.com/photos/914668/pexels-photo-914668.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
            <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                <li class="icon mx-3"><span class="far fa-heart"></span></li>
                <li class="icon"><span class="fas fa-shopping-bag"></span></li>
            </ul>
        </div>
        <div class="title pt-4 pb-1"> Empire Waist Dresses</div>
        <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
        <div class="price">$ 70.0</div>
    </div>
    <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
        <div class="product"> <img src="https://images.pexels.com/photos/6311392/pexels-photo-6311392.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
            <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                <li class="icon mx-3"><span class="far fa-heart"></span></li>
                <li class="icon"><span class="fas fa-shopping-bag"></span></li>
            </ul>
        </div>
        <div class="tag bg-green">new</div>
        <div class="title pt-4 pb-1">Pinafore Dresses</div>
        <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
        <div class="price">$ 60.0</div>
    </div>
</div>
@endsection