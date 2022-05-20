<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailContact extends Model
{
    use HasFactory;

    /** 

     * The attributes that are mass assignable. 

     * 

     * @var array 

     */
    protected $table = 'email_contacts';

    protected $fillable = [
        'name', 'email', 'subject', 'message'
    ];
}
