<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SlideImage extends Model
{
    public function image() {
        return $this->belongsTo('App\Models\FileEntry', 'file_entry_id');
    }
}
