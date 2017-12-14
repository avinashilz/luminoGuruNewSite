<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;
    public function projectCategory() {
        return $this->belongsTo('App\Models\ProjectCategory');
    }
    public function image() {
        return $this->belongsTo('App\Models\FileEntry');
    }
}
