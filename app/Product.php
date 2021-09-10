<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
    'title',
    'product_code',
    'description'
   ];


    protected $hidden =[];
    

   /* public function achats()
    {
      return $this->hasMany(achat::class);
    }

    public function commandes()
    {
      return $this->hasMany(commande::class);}*/
    }
