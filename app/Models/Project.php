<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Project extends Model {

    protected $table = 'projects';

    protected $fillable = ['projectName', 'description', 'userId', 'status'];


    protected function getProject ()
    {
        return Project::where('userId', Auth::user()->id)->get();
    }
}
