<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    //

    protected $fillable=array('name', 'premium');

//        'cartype','vin','engine','salesexecid','mobile','email');

//     protected $table='policies';



public function path() {


    return '/policies/'.$this->id;
}



//    ');


}
