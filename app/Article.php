<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tag;

class Article extends Model
{
    protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = [];

   public function path()
   {
       return route('articles.show', $this);
   }

   public function author()
   {
       return $this->belongsTo(user::class, 'user_id');
   }

   public function tags()
   {
       return $this->belongsToMany(Tag::class);
   }

}
