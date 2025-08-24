<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Books;
use App\Models\Authors;
use App\Models\Publishers;
use App\Models\Suppliers;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'categories' => [
                'active' => Category::where('status', 'active')->count(),
                'inactive' => Category::where('status', 'inactive')->count(),
            ],
            'books' => [
                'active' => Books::where('status', 'active')->count(),
                'inactive' => Books::where('status', 'inactive')->count(),
            ],
            'authors' => [
                'active' => Authors::where('status', 'active')->count(),
                'inactive' => Authors::where('status', 'inactive')->count(),
            ],
            'publishers' => [
                'active' => Publishers::where('status', 'active')->count(),
                'inactive' => Publishers::where('status', 'inactive')->count(),
            ],
            'suppliers' => [
                'active' => Suppliers::where('status', 'active')->count(),
                'inactive' => Suppliers::where('status', 'inactive')->count(),
            ],
        ];

        return view('dashboard', compact('stats'));
    }
}
