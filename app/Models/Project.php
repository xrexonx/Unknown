<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Project extends Model {

    protected $table = 'projects';

    protected $fillable = ['projectName', 'description', 'userId', 'status'];


}
