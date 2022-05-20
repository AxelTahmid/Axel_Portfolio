<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'authors';

    protected $fillable = ['name', 'email'];

    public function blog()
    {
        return $this->belongsToMany(BlogPost::class);
    }
}
