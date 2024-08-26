<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function searchUser(Request $request)
    {
        $name = $request->query('name');
        $email = $request->query('email');
        return response()->json([
            'name' => $name,
            'email' => $email,
            'data_alamat' => [
                [
                    'kota' => "Jakarta",
                    'Provinsi' => "DKI Jakarta",
                    'Negara' => "Indonesia",
                ],
                [
                    'kota' => "Bandung",
                    'Provinsi' => "Jawa Barat",
                    'Negara' => "Indonesia",
                ],
            ]
        ]);
    }

    function findUser($id)
    {
        return "Hi $id";
    }
}
