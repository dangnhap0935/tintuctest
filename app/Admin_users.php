<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin_users extends Authenticatable
{
   //new
   protected $table ='admin_users';
   //new
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','level',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
