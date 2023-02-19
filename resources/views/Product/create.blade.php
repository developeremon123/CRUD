@extends('index')
@section('content')
<div class="container">
    <div class="card-body">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ route('product.store') }}" method="post" class="border p-3 m-2 ">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Product_Name</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="price">Product_Price</label>
                            <input type="text" class="form-control" name="price" id="price">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="image">Product_Image</label>
                            <input type="file" class="form-control" name="image" id="image">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="description">Product_Description</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group col-md-1 pt-3 ">
                            <button type="submit" class="btn btn-primary mr-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection