<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamMember extends Model
{
     use SoftDeletes;
     
     public function images() {
        return $this->belongsToMany('App\Models\FileEntry', 'team_images', 'team_id', 'file_entry_id' );
    }
     
     
     
}
