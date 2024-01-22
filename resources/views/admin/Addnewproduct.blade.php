@extends('admin.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Service</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Service</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Fill the form below</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="/admin/save-detail" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Name</label>
                                        <input name="name" type="text" class="form-control"
                                            placeholder="Enter name of the service" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Price</label>
                                        <input name="price" type="number" class="form-control" id="exampleInputPassword1"
                                            name="price">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">ShortDes</label>
                                        <textarea name="ShortDes" class="form-control" id="exampleInputPassword1" name="ShortDes"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Sizes of the Product</label>

                                        <div class="col-sm-6">
                                            <!-- radio -->
                                            <div class="form-group">
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="customRadio1"
                                                        name="sizes">
                                                    <label for="customRadio1" class="custom-control-label">Extra
                                                        Small(XS)</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="customRadio2"
                                                        name="sizes">
                                                    <label for="customRadio2" class="custom-control-label">Small (S)</label>
                                                </div>

                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="customRadio4"
                                                        name="sizes">
                                                    <label for="customRadio4" class="custom-control-label">Medium
                                                        (M)</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="customRadio5"
                                                        name="sizes">
                                                    <label for="customRadio5" class="custom-control-label">Large (L)</label>
                                                </div>
                                            </div>
                                        </div>

                                        <label>Different Types of Color</label>
                                        <div class="bg-light p-4 mb-30">

                                            <div
                                                class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                                <input type="checkbox" class="custom-control-input" id="color-1"
                                                    name="colors">
                                                <label class="custom-control-label" for="color-1">Black</label>

                                            </div>
                                            <div
                                                class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                                <input type="checkbox" class="custom-control-input" id="color-2"
                                                    name="colors">
                                                <label class="custom-control-label" for="color-2">White</label>

                                            </div>
                                            <div
                                                class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                                <input type="checkbox" class="custom-control-input" id="color-3"
                                                    name="colors">
                                                <label class="custom-control-label" for="color-3">Red</label>

                                            </div>
                                            <div
                                                class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                                <input type="checkbox" class="custom-control-input" id="color-4"
                                                    name="colors">
                                                <label class="custom-control-label" for="color-4">Blue</label>

                                            </div>
                                            <div
                                                class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                                <input type="checkbox" class="custom-control-input" id="color-5"
                                                    name="colors">
                                                <label class="custom-control-label" for="color-5">Green</label>

                                            </div>

                                        </div>

                                    </div>

                                    <label>Detail Images of Product</label>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Upload Image (1*1)</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input name="image1" type="file" class="custom-file-input">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Upload Image (1*1) </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input name="image2" type="file" class="custom-file-input">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Upload Image (1*1)</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input name="image3" type="file" class="custom-file-input">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file </label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <input type="submit" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
