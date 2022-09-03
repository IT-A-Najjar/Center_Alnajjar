@extends('layouts/IndexMen')
@section('titel')
    female show
@endsection
@section('content')


    <main>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="/img/icon.jpg" width="100%" height="225">
                            <div class="card-body">
                                <p class="card-text">
                                <li class="py-1">Name: {{$data['name']}}</li>
                                <li class="py-1">Type: {{$data['type']}}</li>
                                <li class="py-1">Description: {{$data['description']}}</li>
                                <li class="py-1">Price: {{$data['price']}} </li>
                                </p>
{{--                                <div class="d-flex justify-content-between align-items-center">--}}
{{--                                    <div class="btn-group">--}}
{{--                                        <a class="edit-btn" href="{{route('female.edit',$data->id)}}">--}}
{{--                                            edit--}}
{{--                                        </a>--}}
{{--                                        <form action="{{route('female.destroy',$data->id)}}" method="post">--}}
{{--                                            @csrf--}}
{{--                                            @method('DELETE')--}}
{{--                                            <input class="delete-btn" type="submit" value="delete">--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
