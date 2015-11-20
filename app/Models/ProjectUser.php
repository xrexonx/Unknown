<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;


class ProjectUser extends Model {

    protected $table = 'projectUsers';

    protected $fillable = ['projectId', 'userId', 'status'];


    public static function getProjectUsers ($iProjectId)
    {
        $projectUsers = ProjectUser::where('projectId', $iProjectId)
            ->orderBy('created_at', 'DESC')
            ->get();
        $users = [];
        foreach ($projectUsers as  $v) {
            $users[] = User::find($v->userId);
        }
        return $users;
    }

}