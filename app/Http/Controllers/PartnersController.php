<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Partners;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function index()
    {
        $partners = Partners::all();
        $categories = Category::all();
        return view('partners', compact('partners', 'categories'));
    }
}
