<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServicePoint extends Model
{
    use SoftDeletes;
    public function service() {
        return $this->belongsTo('App\Models\Service');
    }
}
