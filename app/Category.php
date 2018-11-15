<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * get the category items
     */
    public function items () {
        return $this->hasMany('App\Item');
    }

    /**
     * get the category super category
     */
    public function superCategory ()
    {
        return $this->belongsTo('App\Category', 'super_id');
    }

    /**
     * get the category sub categories
     */
    public function subCategories ()
    {
        return $this->hasMany('App\Category', 'super_id');
    }
}
