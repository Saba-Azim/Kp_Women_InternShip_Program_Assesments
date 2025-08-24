

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
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">


        <div class="col-lg-4 col-md-6">
            <div class="card shadow-sm text-center" style="border-radius: 12px; overflow: hidden;">
                <!-- Header with icon -->
                <div class="p-3" style="background: #2563EB; color: #fff;">
                    <i class="fa fa-tags fa-2x mb-2"></i>
                    <h5 class="mb-0">Categories</h5>
                </div>

                <!-- Stats -->
                <div class="card-body d-flex justify-content-around">
                    <div>
                        <span class="d-block text-muted">Active</span>
                        <span class="d-block fs-4 fw-bold text-success">{{ $stats['categories']['active'] }}</span>
                    </div>
                    <div>
                        <span class="d-block text-muted">Inactive</span>
                        <span class="d-block fs-4 fw-bold text-danger">{{ $stats['categories']['inactive'] }}</span>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-lg-4 col-md-6">
            <div class="card shadow-sm text-center" style="border-radius: 12px; overflow: hidden;">
                <!-- Header with icon -->
                <div class="p-3" style="background: #EA580C; color: #fff;">
                    <i class="fa fa-tags fa-2x mb-2"></i>
                    <h5 class="mb-0">Books</h5>
                </div>

                <!-- Stats -->
                <div class="card-body d-flex justify-content-around">
                    <div>
                        <span class="d-block text-muted">Active</span>
                        <span class="d-block fs-4 fw-bold text-success">{{ $stats['books']['active'] }}</span>
                    </div>
                    <div>
                        <span class="d-block text-muted">Inactive</span>
                        <span class="d-block fs-4 fw-bold text-danger">{{ $stats['books']['inactive'] }}</span>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-4 col-md-6">
            <div class="card shadow-sm text-center" style="border-radius: 12px; overflow: hidden;">
                <!-- Header with icon -->
                <div class="p-3" style="background: #059669; color: #fff;">
                    <i class="fa fa-tags fa-2x mb-2"></i>
                    <h5 class="mb-0">Authors</h5>
                </div>

                <!-- Stats -->
                <div class="card-body d-flex justify-content-around">
                    <div>
                        <span class="d-block text-muted">Active</span>
                        <span class="d-block fs-4 fw-bold text-success">{{ $stats['authors']['active'] }}</span>
                    </div>
                    <div>
                        <span class="d-block text-muted">Inactive</span>
                        <span class="d-block fs-4 fw-bold text-danger">{{ $stats['authors']['inactive'] }}</span>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-4 col-md-6">
            <div class="card shadow-sm text-center" style="border-radius: 12px; overflow: hidden;">
                <!-- Header with icon -->
                <div class="p-3" style="background: #EAB308; color: #fff;">
                    <i class="fa fa-tags fa-2x mb-2"></i>
                    <h5 class="mb-0">Publishers</h5>
                </div>

                <!-- Stats -->
                <div class="card-body d-flex justify-content-around">
                    <div>
                        <span class="d-block text-muted">Active</span>
                        <span class="d-block fs-4 fw-bold text-success">{{ $stats['publishers']['active'] }}</span>
                    </div>
                    <div>
                        <span class="d-block text-muted">Inactive</span>
                        <span class="d-block fs-4 fw-bold text-danger">{{ $stats['publishers']['inactive'] }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card shadow-sm text-center" style="border-radius: 12px; overflow: hidden;">
                <!-- Header with icon -->
                <div class="p-3" style="background: #EF4444; color: #fff;">
                    <i class="fa fa-tags fa-2x mb-2"></i>
                    <h5 class="mb-0">Suppliers</h5>
                </div>

                <!-- Stats -->
                <div class="card-body d-flex justify-content-around">
                    <div>
                        <span class="d-block text-muted">Active</span>
                        <span class="d-block fs-4 fw-bold text-success">{{ $stats['suppliers']['active'] }}</span>
                    </div>
                    <div>
                        <span class="d-block text-muted">Inactive</span>
                        <span class="d-block fs-4 fw-bold text-danger">{{ $stats['suppliers']['inactive'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .content -->
@endsection
