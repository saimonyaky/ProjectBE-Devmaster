<?php

namespace App\Http\Controllers\User;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function index()
    {
        $list = Category::all()->take(3);
        $data = Product::all()->take(6);
        return view('users.index', compact('list', 'data'));
    }
    function introduce()
    {
        return view('users.introduce');
    }
    function product()
    {
        $list = Category::all();
        $data = Product::all()->take(4);
        return view('users.product', compact('list', 'data'));
    }
    function contact()
    {
        return view('users.contact');
    }
    function news()
    {
        return view('users.news');
    }
}
