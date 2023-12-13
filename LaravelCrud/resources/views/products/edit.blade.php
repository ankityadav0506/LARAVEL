@extends('layouts.app')

@section('main')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 ">
                <div class="card mt-3 p-3">
                    <h2 class="text-muted">Product Edit #{{ $product->name }}</h2>
                    <form method="POST" action="/products/{{$product->id}}/update" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name', $product->name)}}">
                            @if($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                           <textarea class="form-control" rows="4" name="description" >{{ old('description', $product->description) }}</textarea>
                            @if($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control"> 
                            @if($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                        <button class="btn btn-dark" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection