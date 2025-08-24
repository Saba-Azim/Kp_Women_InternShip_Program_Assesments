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
                            <a href="{{ route('books.create') }}" class="btn btn-primary btn-sm">Add</a>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col">Author</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books as $book)
                                        <tr>
                                            <td>{{ $book->title }}</td>
                                            <td>{{ $book->author->name ?? 'N/A' }}</td>
                                            <td>{{ $book->price }}</td>
                                            <td>{{ $book->status }}</td>
                                            <td>
                                                <!-- More Info Button -->
                                                <button type="button" class="btn btn-secondary mb-1" data-toggle="modal"
                                                    data-target="#largeModal">
                                                    Large
                                                </button>

                                                <a href="{{ route('books.edit', $book->id) }}"
                                                    class="btn btn-sm btn-warning">Edit</a>

                                                <form action="{{ route('books.destroy', $book->id) }}" method="POST"
                                                    style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are you sure you want to delete this book?')">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>


                                    @endforeach
                                    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog"
                                            aria-labelledby="largeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="largeModalLabel">Large Modal</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>
                                                            There are three species of zebras: the plains zebra, the
                                                            mountain zebra and the Grévy's zebra. The plains zebra
                                                            and the mountain zebra belong to the subgenus Hippotigris, but
                                                            Grévy's zebra is the sole species of subgenus
                                                            Dolichohippus. The latter resembles an ass, to which it is
                                                            closely related, while the former two are more
                                                            horse-like. All three belong to the genus Equus, along with
                                                            other living equids.
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Cancel</button>
                                                        <button type="button" class="btn btn-primary">Confirm</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
@endsection
