<?php

/**
  * https://secure.php.net/manual/en/language.namespaces.rationale.php
  * The namespace is defined to avoid class name collisions between developer code and PHP code.
  * When namespace isn't defined, we need - use App\User;
*/
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Define relationship - The user has many meals.
    public function meals() {
      return $this->hasMany(Meal::class);
    }
}
