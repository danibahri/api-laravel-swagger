<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


/**
 * @SWG\Get(
 *     path="/users",
 *     summary="Get a list of users",
 *     tags={"Users"},
 *     @SWG\Response(response=200, description="Successful operation"),
 *     @SWG\Response(response=400, description="Invalid request")
 * )
 */

class UserController extends Controller
{
    public function get()
    {
        $user = User::all();
        return response()->json($user);
    }

    public function post(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->alamat = $request->alamat;
        $user->no_tlp = $request->no_tlp;
        $user->save();

        return response()->json($user);
    }

    public function getById($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }
}
