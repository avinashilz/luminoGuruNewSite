<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkFlowPoint extends Model
{
    public function workFlow() {
        return $this->belongsTo('App\Models\WorkFlowPoint', 'work_flow_id');
    } 
}
