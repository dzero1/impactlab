<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * API to delete a user
     * 
     * @url /api/users/{id}
     * @method DELETE
     * */
    public function delete($id, Request $request)
    {
        $isDeleted = User::find($id)->delete();

        if (!$isDeleted) {
            return response()->json(['error' => 'User not found'], 404);
        }

        return response()->json(['message' => 'User deleted successfully'], 200);
    }

}
