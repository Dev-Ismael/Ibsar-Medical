<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsibility extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'summary', 'slug', 'seo_title', 'seo_description', 'seo_keywords', 'content', 'visibility' ,  'img'
    ];
    
}
