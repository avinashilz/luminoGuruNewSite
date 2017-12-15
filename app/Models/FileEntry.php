<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FileEntry extends Model {

    public function teamMember() {
        return $this->belongsToMany('App\Models\TeamMember', 'team_images', 'file_entry_id', 'team_id');
    }
    
    public function project() {
        return $this->hasOne('App\Models\Project');
    }
    
     public function partner() {
        return $this->hasOne('App\Models\Partner');
    }
    
    public function testimonial() {
        return $this->hasOne('App\Models\Testimonial');
    }
    public function workFlow() {
        return $this->hasOne('App\Models\WorkFlow');
    }

}
