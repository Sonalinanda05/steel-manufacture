@extends('layouts.admin.app')

@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Blogs</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active"><a href="{{ route('admin.blog') }}">View Blogs</a></li>

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
                                <h3 class="card-title">All Blogs</h3>
                            </div>

                            <form action="{{ route('admin.contact.store') }}" method="post">
                                @csrf
                                <div class="card-body">



                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Name</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                            placeholder="Title" name="name">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">email</label>
                                        <input type="email" class="form-control" id="exampleInputPassword1"
                                            placeholder="Title" name="email">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">phone</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                            placeholder="Title" name="phone" maxlength="10">
                                    </div>

                                    <div class="form-group">
                                        <label>message</label>
                                        <textarea class="form-control" id="description" name="message" rows="3" placeholder="Enter ..."></textarea>
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
