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
    	$stores = Store::where('sto_active',Store::STATUS_PUBLIC)->paginate(12);
    	$areas = Area::all();
    	$viewData =[
    		'stores' => $stores,
    		'areas' => $areas
    	];
        return view('home',$viewData);
    }
}
