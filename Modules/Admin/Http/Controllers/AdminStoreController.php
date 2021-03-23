<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestStore;
use App\Models\Store;
use App\Models\Category;
use App\Models\Area;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class AdminStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $stores = Store::all();
        return view('admin::store.index',compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $categories= Category::all();
        $areas= Area::all();
        $viewData=[
            'categories' => $categories,
            'areas' => $areas
        ];
        return view('admin::store.create',$viewData);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(RequestStore $requestStore)
    {
        $this->insertOrUpdate($requestStore);
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $store = Store::find($id);
        $categories= Category::all();
        $areas= Area::all();
        $viewData=[
            'categories' => $categories,
            'areas' => $areas,
            'store' => $store
        ];       
        return view('admin::store.update',$viewData);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(RequestStore $requestStore, $id)
    {
        $this->insertOrUpdate($requestStore,$id);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function insertOrUpdate($requestStore,$id = '')
    {
        $store= new Store();
        if($id) $store= Store::find($id);
        $store->sto_name = $requestStore->sto_name;
        $store->sto_slug = Str::slug($requestStore->sto_name);
        $store->sto_category_id = $requestStore->sto_category_id;
        $store->sto_area_id = $requestStore->sto_area_id;
        $store->sto_price = $requestStore->sto_price;
        $store->sto_address = $requestStore->sto_address;
        $store->sto_content = $requestStore->sto_content;
        $store->sto_title = $requestStore->sto_title;
        $store->sto_description =  $requestStore->sto_description;

        if($requestStore->hasFile('avatar'))
        {
            $file = upload_image('avatar','store');
            if(isset($file['name']))
            {
                $store->sto_avatar = $file['name'];
            }
        }

        $store->save();
    }
    public function action($action,$id)
    {
        if($action)
        {
            $store = Store::find($id);
            switch ($action)
            {
                case 'delete':
                    $store->delete();
                    break;
                case 'active':
                    $store->sto_active = $store->sto_active ? 0 : 1;
                    $store->save();
                    break;
                case 'hot':
                    $store->sto_hot = $store->sto_hot ? 0 : 1;
                    $store->save();
                    break;
            }

        }
        return redirect()->back();
    }
}
