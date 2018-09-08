<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const IN_HOME=1;
    const OUT_HOME=0;

    public function infoCategory(){
        return $this->hasOne(Category::class, 'id','category');
    }
}


