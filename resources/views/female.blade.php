@extends('layouts/IndexMen')
@section('titel')
    female
@endsection
@section('content')

    <main>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Women's Department</h1>
                    <p class="lead text-muted">All the new shoes and bags and all models are available to us at competitive prices <p>
                    <p class="lead text-muted">We are honored to visit you<p>
                    <p class="lead text-muted">Contact Us<p>
                        <a href="#" class="btn btn-primary my-2">Abdulhamed Alnajjar</a>
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
                            <img src="img/icon.jpg" width="100%" height="225">
                            <div class="card-body">
                                <a href="{{route('female.show',['female'=>$data['id']])}}">
                                <p class="card-text">

                                   <li class="sd"> {{$data['name']}}</li>

                                </p>
                                </a>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{route('female.show',['female'=>$data['id']])}}">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        </a>
                                        <a href="{{route('female.edit',$data->id)}}">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        </a>
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
