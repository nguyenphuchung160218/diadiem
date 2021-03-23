<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommentArticle;
use App\Models\Article;

class CommentArticleController extends Controller
{
    public function saveComment(Request $request,$id)
    {
        CommentArticle::insert([
            'co_article_id' => $id,
            'co_content' => $request->co_content,
            'co_email' => $request->co_email,
            'co_name' => $request->co_name,
            'co_user_id' => get_data_user('web') ? get_data_user('web') : 0,           
        ]);
        $commentArticle = Article::find($id);
        $commentArticle->a_comment += 1;
        $commentArticle->save();
        return redirect()->back()->with('success','Gửi bình luận thành công');
    }
}
