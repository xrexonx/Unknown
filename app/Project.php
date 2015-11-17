<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Project extends Model {

    protected $table = 'projects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['projectName', 'description', 'userId', 'status'];


}
