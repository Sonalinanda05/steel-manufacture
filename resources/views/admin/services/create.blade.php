@extends('layouts.admin.app')

@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Product</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active"><a href="{{ route('admin.services') }}">View Products</a></li>

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
                                <h3 class="card-title">Add Products</h3>
                            </div>

                            <form action="{{ route('admin.services.store') }}" method="post">
                                @csrf
                                <div class="card-body">



                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                            placeholder="Product Name" name="product">
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
