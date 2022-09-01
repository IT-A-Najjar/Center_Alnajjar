@extends('layouts/IndexMen')
@section('titel')
    female create
@endsection
@section('content')

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Create new Products</h1>
                <form action="{{route('female.store')}}" method="post">
                   @csrf

                    <div class="mb-3">
                        <label for="female-name" class="form-label">Product name</label>
                        <input  id="female-name" class="form-control" name="female-name" value="{{old('female-name')}}" type="text">
                        @error('female-name')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="female-type" class="form-label">Product type</label>
                        <input  id="female-type" class="form-control" name="female-type" value="{{old('female-type')}}" type="text">
                        @error('female-type')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="female-description" class="form-label">Product description</label>
                        <input  id="female-description" class="form-control" name="female-description" value="{{old('female-description')}}" type="text">
                        @error('female-description')
                        {{$message}}
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="female-price">Product price</label>
                        <input id="female-price" class="form-control" name="female-price" value="{{old('female-price')}}" type="text">
                        @error('female-price')
                            {{$message}}
                        @enderror
                    </div>
{{--                    <div class="mb-3">--}}
{{--                        <label for="female-price">Product Img</label>--}}
{{--                        <input id="female-price" class="form-control" name="female-price" value="{{old('female-img')}}" type="file">--}}
{{--                        @error('female-img')--}}
{{--                        {{$message}}--}}
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
