<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class ProjectUser extends Model {

    protected $table = 'projectUsers';

    protected $fillable = ['projectId', 'userId', 'status'];

}