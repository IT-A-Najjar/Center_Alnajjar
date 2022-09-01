@extends('layouts/IndexMen')
@section('titel')
    female edit
@endsection
@section('content')

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Edit an oid Products</h1>
                <form action="{{route('female.update',$data->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="female-name" class="form-label">Product name</label>
                        <input  id="female-name" class="form-control" name="female-name" value="{{$data->name}}" type="text">
                        @error('female-name')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="female-type" class="form-label">Product type</label>
                        <input  id="female-type" class="form-control" name="female-type" value="{{$data->type}}" type="text">
                        @error('female-type')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="female-description" class="form-label">Product description</label>
                        <input  id="female-description" class="form-control" name="female-description" value="{{$data->description}}" type="text">
                        @error('female-description')
                        {{$message}}
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="female-price">Product price</label>
                        <input id="female-price" class="form-control" name="female-price" value="{{$data->price}}" type="text">
                        @error('female-price')
                        {{$message}}
                        @enderror
                    </div>
{{--                    <div class="aa">--}}
{{--                        <label for="female-name">Product name</label>--}}
{{--                        <input id="female-name" name="female-name" value="{{$data->name}}" type="text">--}}
{{--                        @error('female-name')--}}
{{--                            {{$message}}--}}
{{--                        @enderror--}}
{{--                    </div>--}}

{{--                    <div class="aa">--}}
{{--                        <label for="female-price">Product price</label>--}}
{{--                        <input id="female-price" name="female-price" value="{{$data->price}}" type="text">--}}
{{--                        @error('female-price')--}}
{{--                            {{$message}}--}}
{{--                        @enderror--}}
{{--                    </div>--}}

                    <div class="aa">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


@endsection
