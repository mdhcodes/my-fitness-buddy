<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    /**
    * https://laravel.com/docs/5.4/eloquent | Mass Assignment
    * "Once we have made the attributes mass assignable, we can use the create method to insert a new record in the database."
    *
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = ['name', 'protein', 'carbohydrates', 'fat'];

    // Define relationship - A food belongs to a meal
    public function meal() {
      return $this->belongsTo(Meal::class);
    }

    public function calories() {
      return (($this->protein * 4) + ($this->carbohydrates * 4) + ($this->fat * 9));
    }
}
