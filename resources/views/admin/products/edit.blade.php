@extends('layouts.admin.app')

@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Product Images</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active"><a href="{{ route('admin.products') }}">View Products</a></li>

                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Products Images</h3>
                            </div>

                            <form action="{{ route('admin.products.update', ['id' => $products->id]) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="exampleInputFile">Image</label>
                                        <div class="input-group">

                                            <input class="form-control" type="file" id="formFileMultiple" name="images[]"
                                                multiple>


                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <select class="form-control select2" style="width: 100%;" name="product">
                                            <option value="">Select Product Name</option>
                                            @foreach ($singleProducts as $product)
                                                <option value="{{ $product }}">{{ $product }}</option>
                                            @endforeach
                                        </select>
                                    </div>



                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>



                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
