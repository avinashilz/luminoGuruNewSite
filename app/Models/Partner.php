<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partner extends Model
{
    use SoftDeletes;
    public function image() {
        return $this->belongsTo('App\Models\FileEntry', 'file_entry_id');
    }
}
