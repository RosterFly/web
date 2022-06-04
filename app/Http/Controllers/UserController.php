<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\CreateNewUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $newUser = new CreateNewUser();
        $user = $newUser->create($request->all());
    }
}
