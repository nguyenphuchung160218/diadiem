<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;

class HeartController extends Controller
{
    public function getHeart($id)
    {
    	$heartStore = Store::find($id);
	    $heartStore->sto_heart += 1;
	    $heartStore->save();
	    return redirect()->back()->with('success','Thêm vào yêu thích thành công');
    }
}
