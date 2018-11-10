<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActionLog extends Model
{
    /**
     * get the actionLog admin
     */
    public function admin () {
        return $this->belognsTo('App\User', 'admin_id');
    }
    
    /**
     * get the actionLog type
     */
    public function actionType () {
        return $this->belongsTo ('App\ActionType');
    }

    /**
     * get the actionLog targetType
     */
    public function actionTargetType () {
        return $this->belongsTo('App\ActionTargetType');
    }
    
    /**
     * get the actionLog target
     */
    public function actionTarget () {
        
        /*
         * Here we need to get the target which we are not sure what its table is,
         * The target table name is the saved in 'name' column in 'action_target_type' table
         */

         $tableName = $this->actionTargetType->name;
         return $this->belongsTo('App\\' . $tableName, 'action_target_id');
    }
}
