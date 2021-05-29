<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'business',
        'RFC',
        'name',
        'article',
        'article_code'
    ];
}
