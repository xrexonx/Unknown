<?php
namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//use Auth;
//use Validator;
//use App\Http\Requests\Request;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    protected function getUsers()
    {
        $users = User::all();
        return response()->json($users);
    }

}