<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Project;

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
}
