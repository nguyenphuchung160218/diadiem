<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Store;

class HomeController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
    	$stores = Store::paginate(12);
    	$areas = Area::all();
    	$viewData =[
    		'stores' => $stores,
    		'areas' => $areas
    	];
        return view('home',$viewData);
    }
}
