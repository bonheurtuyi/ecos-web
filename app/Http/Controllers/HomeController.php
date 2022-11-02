<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Category;
use App\Models\Partners;
use App\Models\Service;
use App\Models\Test;
use Illuminate\Support\Facades\Session;



class HomeController extends Controller
{
    public function index()
    {
        $projects = Achievement::all();
        $testimonials = Test::all();
        $partners = Partners::all();
        $categories = Category::all();
        $services = Service::all()->take(6);
        return view('welcome', compact( 'projects', 'testimonials', 'partners', 'categories', 'services'));
    }

}
