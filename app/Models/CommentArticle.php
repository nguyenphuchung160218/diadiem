<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentArticle extends Model
{
    use HasFactory;
    protected $table ='comment_articles';
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = ['co_name', 'co_body','co_email'];
   
    /**
     * The has Many Relationship
     *
     * @var array
     */
    public function comments()
    {
        return $this->hasMany(ReplyComment::class)->whereNull('co_article_id');
    }

}
