<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsCategory;

class CategoryController extends Controller
{
    public function index($newCateogryUrlSlug)
    {
        $newCateogryUrlSlug = 'leadership';
        $news_categories = NewsCategory::where('url_slug', $newCateogryUrlSlug)->get();
        
        dd($news_categories);
        return view('welcome', compact('news_categories'));
    }
}
