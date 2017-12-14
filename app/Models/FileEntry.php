<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FileEntry extends Model {

    public function teamMember() {
        return $this->belongsToMany('App\Models\TeamMember', 'team_images', 'file_entry_id', 'team_id');
    }

}
