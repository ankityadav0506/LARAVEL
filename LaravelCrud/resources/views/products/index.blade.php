@extends('layouts.app')

@section('main')
    <div class="container">

        <div class="text-right">
            <a href="products/create" class="btn btn-dark mt-2">New Products</a>
        </div>

        <table class="table table-hover mt-3">
            <thead>
            <tr>
                <th>Sno.</th>
                <th>Name</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td><a href="products/{{ $product->id }}/show " class="text-dark"> {{ $product->name }}</a></td>
                    <td><img src="products/{{ $product->image }}" class="rounded-circle" height="30" width="30"></td>
                    <td>
                        <a href="products/{{ $product->id }}/edit" class="btn btn-dark btn-sm">Edit</a>
                        <form method="post" action="products/{{ $product->id }}/delete" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
        {{ $products->links() }}
    </div>
@endsection