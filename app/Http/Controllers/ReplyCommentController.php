<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReplyComment;
   
class ReplyCommentController extends Controller
{
   
    public function store(Request $request)
    {
    	$request->validate([
            'r_body'=>'required',
        ]);
   
        $input = $request->all();
        $input['r_user_id'] = auth()->user()->id;
    
        ReplyComment::create($input);
   
        return back();
    }
   
}
