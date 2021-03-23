<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Comment;
use Illuminate\Support\Facades\URL;

class StoreController extends FrontendController
{
	public function __construct()
    {
        parent::__construct();
    }
	public function storeDetail($category,$slug)
	{
		//lay url hien tai share fb
		$storeUrl=URL::current();

		//lay chi tiet store 
		$storeDetail = Store::where([
			'sto_active' => Store::STATUS_PUBLIC,
			'sto_slug' => $slug,
		])->first();

		//lay cac store hot
		$storesHot = Store::where('sto_hot',Store::HOT)->limit(6)->get();

		//lay cac store cung area
		$storesOther = Store::where('sto_area_id',$storeDetail->sto_area_id)->limit(6)->get();

		//lay danh sach comment
		$listComments= Comment::where('co_store_id',$storeDetail->id)->limit(10)->get();
		

		$viewData = [
			'listComments' => $listComments,
			'storeUrl' => $storeUrl,
			'storeDetail' => $storeDetail,
			'storesHot' => $storesHot,
			'storesOther' => $storesOther,
		];

		//tang view store/lan
		$viewStore = Store::find($storeDetail->id);
        $viewStore->sto_view += 1;
        $viewStore->save();
		return view('store.detail',$viewData);
	}
}

