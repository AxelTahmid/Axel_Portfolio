<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blogs';

    protected $fillable = ['title', 'content', 'author_id', 'category'];

    public function author()
    {
        return $this->hasOne(Author::class);
    }

    public function category()
    {
        return $this->hasMany(BlogCategory::class);
    }
}
