<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Store;
use App\Http\Requests\RequestStore;
use Illuminate\Support\Str;

class UserController extends FrontendController
{
	public function __construct()
    {
        parent::__construct();
    }
    public function getUser()                    
    {
        //info user
        $user=User::find(get_data_user('web'));

        //bai dang cua user
        $stores=Store::where([
            'sto_active' => Store::STATUS_PUBLIC,
            'sto_author_id' => $user->id,
        ])->get();

        $viewData=[
            'user' => $user,
            'stores' => $stores,
        ];
    	return view('user.index',$viewData);
    }
    public function getPost()
    {
    	return view('user.post');
    }
    public function postStore(RequestStore $request)
    {
        $store= new Store();
        $store->sto_name = $request->sto_name;
        $store->sto_slug = Str::slug($request->sto_name);
        $store->sto_category_id = $request->sto_category_id;
        $store->sto_area_id = $request->sto_area_id;
        $store->sto_price = $request->sto_price;
        $store->sto_address = $request->sto_address;
        $store->sto_content = $request->sto_content;
        $store->sto_title = $request->sto_title;
        $store->sto_description =  $request->sto_description;
        $store->sto_active = 0;

        if($request->hasFile('avatar'))
        {
            $file = upload_image('avatar','store');
            if(isset($file['name']))
            {
                $store->sto_avatar = $file['name'];
            }
        }

        $store->save();
        return redirect()->back()->with('success','Đăng bài thành công');
    }
    public function getSetting()
    {
    	return view('user.setting');
    }
}
