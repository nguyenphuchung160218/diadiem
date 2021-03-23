<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Store;
class CategoryController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function post(Request $request)
    {   

        $stores = Store::where('sto_active',Store::STATUS_PUBLIC);
        $activeSlug='';
        $activeArea='';
       
        if($request->search)
        {                  
            $stores->where('sto_name','like','%'.$request->search.'%');

        }
        if($request->areaId)
        {
            $stores->where('sto_area_id','=',$request->areaId);
        }
        if($request->categoryId)
        {
            $stores->where('sto_category_id','=',$request->categoryId);
        }
        
        // if ($request->orderby)
        // {
        //     $orderby = $request->orderby;
        //     switch ($orderby)
        //     {
        //         case 'desc':
        //             $products->orderBy('id','DESC');
        //             break;
        //         case 'asc':
        //             $products->orderBy('id','ASC');
        //             break;
        //         case 'price_max':
        //             $products->orderBy('pro_price','ASC');
        //             break;
        //         case 'price_min':
        //             $products->orderBy('pro_price','DESC');
        //             break;
        //         default:
        //             $products->orderBy('id','DESC');
        //     }
        // }
        $stores=$stores->paginate(12);
        $areas = Area::all();
        $categories = Category::all();
        $viewData = [
            'activeArea' =>$activeArea,
            'activeSlug' =>$activeSlug,
            'areas' => $areas,
            'categories' => $categories,
            'stores' => $stores,
            'query' => $request->query(),
        ];

        return view('store.index',$viewData);
    }
    public function index($slug=''){
        $activeArea='';
        $activeSlug='';
        $stores = Store::where('sto_active',Store::STATUS_PUBLIC);
        if(!$slug==''){
            $activeSlug=$slug;
            $id = Category::where('c_slug',$activeSlug)->select('id')->first();
            $stores->where('sto_category_id',$id->id)->get();
        }
        
        $stores=$stores->paginate(12);
        $areas = Area::all();
        $categories = Category::all();
        $viewData = [
            'activeArea' =>$activeArea,
            'activeSlug' =>$activeSlug,
            'areas' => $areas,
            'categories' => $categories,
            'stores' => $stores,
            // 'query' => $request->query(),
        ];
        return view('store.index',$viewData);

    }
    public function getArea($slug=''){
        $activeSlug='';
        $activeArea='';
        $stores = Store::where('sto_active',Store::STATUS_PUBLIC);
        if(!$slug==''){
            $activeArea=$slug;
            $id = Area::where('area_slug',$activeArea)->select('id')->first();
            $stores->where('sto_area_id',$id->id)->get();
        }
        
        $stores=$stores->paginate(12);
        $areas = Area::all();
        $categories = Category::all();
        $viewData = [
            'activeSlug' =>$activeSlug,
            'activeArea' =>$activeArea,
            'areas' => $areas,
            'categories' => $categories,
            'stores' => $stores,
            // 'query' => $request->query(),
        ];
        return view('store.index',$viewData);
    }
}
