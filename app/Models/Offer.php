<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;


    protected $fillable = [
        'title', 'summary', 'slug', 'seo_title', 'seo_description', 'seo_keywords', 'content', 'img'
    ];


    ############################## Relations ################################
    public function orders(){
        return  $this -> hasMany("App\Models\Order") ;
    }


}
