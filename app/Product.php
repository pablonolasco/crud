<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    use SoftDeletes; //Implementamos 

    protected $dates = ['deleted_at']; //Registramos la nueva columna
    protected $table='products';
    protected $fillable=['nombre','descripcion','precio','stock','category_id'];

    //===============1:1
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    
}
