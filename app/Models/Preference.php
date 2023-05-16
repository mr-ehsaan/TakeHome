<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','category_id','source_id','author_id','date_from','date_to'];

    public function source()
    {
        return $this->hasOne(Source::class, 'id', 'source_id');
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function author()
    {
        return $this->hasOne(Author::class, 'id', 'author_id');
    }
}
