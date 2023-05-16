<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','url','source_id','category_id','author_id','published_at'];

}
