@extends('layouts/IndexMen')
@section('titel')
    men
@endsection
@section('content')

    <main>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Men's Department</h1>
                    <p class="lead text-muted">All the new shoes and bags and all models are available to us at competitive prices <p>
                    <p class="lead text-muted">We are honored to visit you<p>
                    <p class="lead text-muted">Contact Us<p>
                        <a href="#" class="btn btn-primary my-2">Ahmed Alnajjar</a>
                    </p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @if(count($data)>0)
                        @foreach($data as $data)
                            <div class="col">
                                <div class="card shadow-sm">
                                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

                                    <div class="card-body">
                                        <p class="card-text">
                                        <li> {{$data['type']}}</li>
                                        </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                            </div>
                                            <small class="text-muted">9 mins</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p> there are no samples to display </p>
                    @endif
                </div>
            </div>
        </div>

    </main>

@endsection
