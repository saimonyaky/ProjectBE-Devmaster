<?php

namespace App\Http\Controllers\User;

use App\Category;
use App\Tiding;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShareController extends Controller
{
    protected $category;
    protected $news;
    public function __construct()
    {
        $category = Category::all();
        $news = Tiding::latest()->limit(4)->get();
        $this->category = $category;
        $this->news = $news;
        view()->share("category", $category);
        view()->share("news", $news);
    }
}