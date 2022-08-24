@extends('layouts/IndexMen')
@section('titel')
    home
@endsection

@section('content')

    <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Al Najjar Shoes & Bags Complex</h1>
            <p class="lead my-3">All the new shoes and bags and all models are available to us at competitive prices, We are honored to visit you</p>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">FEMALE</strong>
                    <h3 class="mb-0">Women's shoes and bage</h3>
                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="/female" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img width="200" height="250" src="img/icon.jpg">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">MEN</strong>
                    <h3 class="mb-0">Men's shoes and bage</h3>
                    <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="/men" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img width="200" height="250" src="img/icon.jpg">
                </div>
            </div>
        </div>
    </div>

@endsection
