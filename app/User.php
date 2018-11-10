<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
    
    /*
     * get the user role
     */
    public function role () {
        return $this->belongsTo('App\Role');
    }

    /*
     * get the user searchLogs
     */
    public function searchLogs () {
        return $this->hasMany('App\SearchLog');
    }

    /*
     * get the admin actionLogs
     */
    public function actionLogs () {
        return $this->hasMany('App\ActionLog', 'admin_id');
    }
}
