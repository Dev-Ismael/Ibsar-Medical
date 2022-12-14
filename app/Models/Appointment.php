<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;


    protected $fillable = [
        'username',
        'phone',
        'member_id',
        'date',
        'time',
    ];



    ############################## Relations ################################
    public function member(){
        return  $this -> belongsTo("App\Models\Member") ;
    }

}
