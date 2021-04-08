<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Store;
use Illuminate\Support\Str;
use App\Http\Requests\RequestStore;
use Illuminate\Support\Facades\Hash;

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
        return redirect()->back()->with('success','Đăng bài thành công, chờ Admin kiểm duyệt');
    }
    public function getSetting()
    {
        //info user
        $user=User::find(get_data_user('web'));
    	return view('user.setting',compact('user'));
    }
    public function updateInfo(RequestStore $request)
    {
        $user=User::find(get_data_user('web'));
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->number;
        $user->address=$request->address;
        if($request->hasFile('avatar'))
        {
            $file = upload_image('avatar');
            if(isset($file['name']))
            {
                $user->avatar = $file['name'];
            }
        }
        $user->save();
        return redirect()->back()->with('success','Cập nhật thông tin thành công');
    }
    public function updatePassword(RequestStore $request)
    {
        $user=User::find(get_data_user('web'));
        if(Hash::check($request->password,$user->password))
        {
            if($request->newpassword==$request->repassword)
            {
                $user->password=bcrypt($request->newpassword);
                $user->save();
                return redirect()->back()->with('success','Thay đổi mật khẩu thành công');
            }
            else{
                return redirect()->back()->with('danger','Nhập lại mật khẩu không đúng');
            }
        }
        else{
            return redirect()->back()->with('danger','Nhập sai mật khẩu');
        }    
    }

    public function destroy()
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('success','Xóa tài khoản thành công');
    }
}
