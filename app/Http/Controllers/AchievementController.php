<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Category;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('achievements', compact('categories'));
    }
    public function show($categorySlug)
    {
        $category = Category::all()->where('slug', $categorySlug)->first();
        $categories = Category::all();
        $achievements = Achievement::all()->where('category_id', $category->id);
        return view('achievement-single', compact('category', 'achievements', 'categories'));
    }
}
