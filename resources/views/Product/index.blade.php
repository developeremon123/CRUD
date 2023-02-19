@extends('index')
@section('content')
<table class="table">
    <thead>
        <tr>
            <th>SI</th>
            <th>Name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Description</th>
            <th>Actio</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->image }}</td>
            <td>{{ $product->description }}</td>
            <td>
                <a href="{{ route('product.edit', $product->id) }}">Edit</a>
                <form action="{{ route('product.destroy', $product->id) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table> 

@endsection