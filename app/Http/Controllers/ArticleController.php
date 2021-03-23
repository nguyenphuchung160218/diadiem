<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\CategoryArticle;
use App\Models\CommentArticle;
use Illuminate\Support\Facades\URL;

class ArticleController extends FrontendController
{
     public function __construct()
    {
        parent::__construct();
    }
    public function getArticle()
    {
        //lay tat ca bai viet
    	$articles = Article::paginate(9);

        //lay bai viet hot
    	$articlesHot =Article::where('a_hot',1)->limit(6)->get();

    	$viewData=[
    		'articles' =>$articles,
    		'articlesHot'=>$articlesHot
    	];
    	return view('article.index',$viewData);
    }
    public function getDetail($slug,Request $request){

        //lay url hien tai share fb
        $articleUrl=URL::current();

        //chi tiet bai viet
        $article = Article::where('a_slug',$slug)->first();

        //lay bai viet hot
        $articlesHot =Article::where('a_hot',1)->limit(6)->get();      

        //lay ds comment
        $listComments = CommentArticle::where('co_article_id',$article->id)->limit(6)->get();

        //lay danh bai viet cung danh muc
        $articlesOther = Article::where([
                'a_active' => Article::STATUS_PUBLIC,
                'a_category_id' => $article->a_category_id,
            ])->limit(6)->get();

        $viewData=[
            'articlesHot' => $articlesHot,
            'articleUrl' => $articleUrl,
            'article' =>$article,
            'listComments'=> $listComments,
            'articlesOther'=>$articlesOther,
        ];

        //tang view article/lan
        $viewArticle = Article::find($article->id);
        $viewArticle->a_view += 1;
        $viewArticle->save();

        return view('article.detail',$viewData);
    }

}
