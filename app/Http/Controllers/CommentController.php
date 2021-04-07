<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Store;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function saveComment(Request $request,$id)
    {
        Comment::insert([
            'co_store_id' => $id,
            'co_content' => $request->co_content,
            'co_email' => $request->co_email,
            'co_name' => $request->co_name,
            'co_user_id' => get_data_user('web') ? get_data_user('web') : 0,           
        ]);
        $commentStore = Store::find($id);
        $commentStore->sto_comment += 1;
        $commentStore->save();
        return redirect()->back()->with('success','Gửi bình luận thành công');
    }
}