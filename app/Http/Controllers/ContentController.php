<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\NewsContent;
use App\Models\User;

class ContentController extends Controller
{
    public function index() 
    {
        // get all contents
        $news_contents = NewsContent::all();

        // filter user by id
        $users = User::where('id', Auth::id())->get();

        // return to view with parameters
        return view('welcome', compact('news_contents', 'users'));
    }

    public function filterByCategory()
    {
        
    }
}
