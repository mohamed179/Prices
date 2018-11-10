<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SearchLog extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * get the searchLog user
     */
    public function user () {
        return $this->belongsTo('App\User');
    }
    
    /**
     * get the searchLog type
     */
    public function searchType () {
        return $this->belongsTo('App\SearchType');
    }
}
