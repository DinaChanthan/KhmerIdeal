<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsContent;

class DetailNewsController extends Controller
{   
    public function index($contendID)
    {   
        $news_details = NewsContent::where('id', $contendID)->get();
        return view('newsdetail', compact('news_details'));
    }
}
