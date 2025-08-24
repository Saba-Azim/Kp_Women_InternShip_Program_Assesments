@extends('layout.master')
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Purchase</a></li>
                        <li class="active">Add Record</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">


            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Add New</strong> Record
                        </div>
                        <div class="card-body card-block">
                            <form action="{{route('purchase.store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Book</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="book_id" id="select" class="form-control">
                                            <option value="0">Please select</option>
                                            @foreach ($books as $book )
                                                <option value="{{$book->id}}">{{$book['title']}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="supplier" class=" form-control-label">Supplier</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="supplier_id" id="select" class="form-control">
                                            <option value="0">Please select</option>
                                            @foreach ($suppliers as $supplier )
                                                <option value="{{$supplier->id}}">{{$supplier['name']}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="quantity" class=" form-control-label">Quantity</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="tel" id="text-input" name="quantity"
                                            placeholder="Enter Quantity" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="price" class=" form-control-label">Price</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="price"
                                            placeholder="Enter Price" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="total_price" class=" form-control-label">Total Price</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="total"
                                            placeholder="Enter Total Price" class="form-control">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="purchase_date" class=" form-control-label">Purchase Date</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="date" id="text-input" name="purchase_date"
                                            placeholder="Enter Purchase Date" class="form-control">
                                    </div>
                                </div>

                                    <center><button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button></center>

                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
@endsection
