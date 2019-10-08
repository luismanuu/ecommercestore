<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable =['title', 'description', 'price', 'image_url'];

    public function url(){
        return $this->id ? 'productos.update' : 'productos.store';
    }

    public function method(){
        return $this->id ? 'PUT' : 'POST';
    }

}
