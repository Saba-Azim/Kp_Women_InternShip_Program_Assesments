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
                        <li class="active">Books Record</li>
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
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <strong class="card-title mb-0">Books Record</strong>
                            <a href="{{route('books.create')}}" class="btn btn-primary btn-sm">Add</a>
                        </div>

                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Category</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Author</th>
                                        <th scope="col">ISBN</th>
                                        <th scope="col">Publisher</th>
                                        <th scope="col">Publication Date</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Description</th>

                                    </tr>
                                </thead>
                                 <tbody>
                                    @foreach ($book as $books )
                                    <tr>
                                        <td>{{$books->category['category-name']?? 'N/A'}}</td>
                                        <td>{{$books->title}}</td>
                                        <td>{{$books->author}}</td>
                                        <td>{{$books->isbn}}</td>
                                        <td>{{$books->publisher}}</td>
                                        <td>{{$books['publication-date']}}</td>
                                        <td>{{$books->price}}</td>
                                        <td>{{$books->quantity}}</td>
                                        <td>{{$books->image}}</td>
                                        <td>{{$books->description}}</td>
                                        <td>{{$books->status }}</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                            <form action="#" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
@endsection
