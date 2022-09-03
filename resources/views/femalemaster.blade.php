@extends('layouts/IndexMen')
@section('titel')
    female
@endsection
@section('content')

    <main>

        <section class="py-1 text-center container">
            <div class="row py-lg-1">
                <div class="col-lg-4 col-md-8 mx-auto">
                        <a href="{{route('female.create')}}" class="btn btn-primary my-2">Create</a>
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
                                <a href="{{route('femalemaster.show',['femalemaster'=>$data['id']])}}">
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
                                        <form action="{{route('female.destroy',$data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input class="delete-btn" type="submit" value="delete">
                                        </form>
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
