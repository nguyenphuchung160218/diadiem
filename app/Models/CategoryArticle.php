<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CategoryArticle extends Model
{
    use HasFactory;
    protected $table ='category_articles';
    const HOME_PUBLIC =1;
    const HOME_PRIVATE =0;
    protected $hot = [
        1=>[
            'name'=>'Public',
            'class'=>'label-primary'
        ],
        0=>[
            'name'=>'Private',
            'class'=>'label-default'
        ]
    ];
    public function getHot()
    {
        return data_get($this->hot,$this->c_hot_article,'[error]');
    }
      public function articles()
    {
        return $this->hasMany(Article::class,'a_category_id');
    }
}
