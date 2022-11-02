<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function testimonials()
    {
        $categories = Category::all();
        $testimonials = Testimonial::all();
        return view('testimonials', compact('categories', 'testimonials'));
    }
}
