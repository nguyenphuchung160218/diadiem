<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\CategoryArticle;
use App\Models\Store;
use App\Models\Area;
use Illuminate\Support\Facades\View;

class FrontendController extends Controller
{
    public function __construct()
    {
        $cagetories = Category::where('c_home',Category::HOME_PUBLIC)
        ->get();
        $areas = Area::all();
        $categoryArticle= CategoryArticle::all();
        View::share([
            'categoryArticle' => $categoryArticle,
        	'categories'=>$cagetories,
        	'areas'=>$areas
        ]);
        
    }
}
