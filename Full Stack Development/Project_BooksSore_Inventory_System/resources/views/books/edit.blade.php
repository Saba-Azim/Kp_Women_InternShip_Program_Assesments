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
                        <li><a href="#">Books</a></li>
                        <li class="active">Edit Book</li>
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
                        <div class="card-body card-block">
                            <form action="{{ route('books.update', $book->id) }}" method="POST"
                                enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                @method('PUT')
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select-category" class=" form-control-label">Select Category</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="category-id" id="select" class="form-control">
                                            <option disabled>Please select</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $book->category_id == $category->id ? 'selected' : '' }}>
                                                    {{ $category['category_name'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="title" class=" form-control-label">Title</label>
                                    </div>
                                    <div class="col-12 col-md-9"><input type="text" id="title" name="title"
                                            placeholder="{{ $book['title'] }}" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select-author" class=" form-control-label">Select Auhtor</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="author_id" id="author" class="form-control">
                                            <option value="">Please select</option>
                                            @foreach ($authors as $author)
                                                <option value="{{ $author->id }}"
                                                    {{ $book->author_id == $author->id ? 'selected' : '' }}>
                                                    {{ $author->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="isbn" class=" form-control-label">ISBN</label>
                                    </div>
                                    <div class="col-12 col-md-9"><input type="text" id="isbn" name="isbn"
                                            placeholder="{{ $book['isbn'] }}" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select-publisher" class=" form-control-label">Select Publisher</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="publisher_id" id="publisher" class="form-control">
                                            <option value="">Please select</option>
                                            @foreach ($publishers as $publisher)
                                                <option value="{{ $publisher->id }}"
                                                    {{ $book->publisher_id == $publisher->id ? 'selected' : '' }}>
                                                    {{ $publisher->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select-supplier" class=" form-control-label">Select Supplier</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="supplier_id" id="supplier" class="form-control">
                                            <option value="">Please select</option>
                                            @foreach ($suppliers as $supplier)
                                                <option value="{{ $supplier->id }}"
                                                    {{ $book->supplier_id == $supplier->id ? 'selected' : '' }}>
                                                    {{ $supplier->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="publication-date" class=" form-control-label">Publication Date</label>
                                    </div>
                                    <div class="col-12 col-md-9"><input type="date" id="publication-date"
                                            name="publication-date" placeholder="{{ $book['publication-date'] }}"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="price" class=" form-control-label">Price</label>
                                    </div>
                                    <div class="col-12 col-md-9"><input type="number" id="price" name="price"
                                            placeholder="{{ $book['price'] }}" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="quantity" class=" form-control-label">Quantity</label>
                                    </div>
                                    <div class="col-12 col-md-9"><input type="number" id="quantity" name="quantity"
                                            placeholder="{{ $book['quantity'] }}" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" class=" form-control-label">Image</label>
                                    </div>
                                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="image"
                                            class="form-control-file"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="description" class=" form-control-label">Description</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="description" id="description" rows="9" placeholder="{{ $book['description'] }}"
                                            class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Select Status</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="status" id="select" class="form-control">
                                            <option value="active" {{$book->status == 'active' ? 'selected' : ''}}>Active</option>
                                            <option value="inactive" {{$book->status == 'inactive' ? 'selected' : ''}}>Inactive</option>
                                        </select>
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
