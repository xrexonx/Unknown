<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Models\Project;
use App\Models\ProjectUser;
use App\User;

class ProjectController extends Controller
{
    protected function show()
    {
        $project = Project::where('userId', Auth::user()->id)->get();
        return response()->json($project);
    }

    protected function createProject(Request $request)
    {
        $project = new Project();
        $project->projectName = $request->name;
        $project->description = $request->desc;
        $project->userId = Auth::user()->id;
        $project->status = 'open';
        $bSuccess = $project->save();

        if ($bSuccess) {
            $this->show();
        }

    }

    protected function getUsers ()
    {
//      $project = ProjectUser::where('projectId', Auth::user()->id)->get();
        //since no project user inserted yet in database. display all users
        $users = User::all();
        return response()->json($users);
    }


}
