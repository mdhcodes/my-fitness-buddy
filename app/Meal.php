<?php

/**
  * https://secure.php.net/manual/en/language.namespaces.rationale.php
  * The namespace is defined to avoid class name collisions between developer code and PHP code.
  * When namespace isn't defined, we need - use App\User;
*/
namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    /**
     * https://laravel.com/docs/5.4/eloquent | Mass Assignment
     * "Once we have made the attributes mass assignable, we can use the create method to insert a new record in the database."
     *
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    // Define relationship - A meal belongs to a user.
    public function user() {
      return $this->belongsTo(User::class);
    }

    // Define relationship - A meal has many foods.
    public function foods() {
      return $this->hasMany(Food::class);
    }
}
