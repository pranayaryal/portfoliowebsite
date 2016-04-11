<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['product_name', 'price'];



    public function createUrl()
    {
        $product_name = str_replace(' ', '', $this->product_name);
        $this->url = "?id=" . $this->id  . "/" . "?name=" . $product_name;
        return $this;
    }
}
