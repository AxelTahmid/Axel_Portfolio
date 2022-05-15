<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blog_category';

    protected $fillable = ['name', 'description'];

    public function blog()
    {
        return $this->belongsToMany(Blog::class);
    }
}
