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

    private $request = '';

    public function __construct (Request $request) {
        $this->request = $request;
    }


    protected function show()
    {
        return response()->json(Project::getProject());
    }

    protected function createProject()
    {
        $bSuccess = Project::create([
            'projectName' => $this->request->name,
            'description' => $this->request->desc,
            'userId' => Auth::user()->id,
            'status' => 'open'
        ]);

        if ($bSuccess) {
            $oProject = [
                'oProject' => Project::getProject(),
                'message' => 'Project successfully created.'
            ];

            return response()->json($oProject);
        }

    }

    protected function getProjectUsers ()
    {
        $projectUsers = ProjectUser::getProjectUsers($this->request->id);
        return response()->json($projectUsers);
    }


    protected function getUsers ()
    {
        $users = User::all();
        return response()->json($users);
    }

    protected function addProjectUser()
    {
        $iProjectId = $this->request->iProjectId;
        $aUsersId   = json_decode($this->request->aUsersId);

        foreach ($aUsersId as $userId) {
            $bSuccess = ProjectUser::create([
                'projectId' => $iProjectId,
                'userId' => $userId,
                'status' => 'active'
            ]);
        }

        if ($bSuccess) {
            $oUsers = [
                'oProjectUser' => ProjectUser::getProjectUsers($iProjectId),
                'message' => 'Users successfully added.'
            ];

            return response()->json($oUsers);
        }

    }

}
