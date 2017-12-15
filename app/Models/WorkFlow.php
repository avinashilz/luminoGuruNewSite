<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkFlow extends Model
{
    use SoftDeletes;
    public function image() {
        return $this->belongsTo('App\Models\FileEntry', 'file_entry_id');
    }
    public function workFlowPoints() {
        return $this->hasMany('App\Models\WorkFlowPoint');
    }
}
