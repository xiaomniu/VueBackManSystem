<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function updateUser(Request $request){
        $all = $request->all();
        // dd($all);
        $data = [
            'name' => $all['name'] .'xixixix',
            'age' => $all['age'] + 234,
        ];
        // $this->resultJson($data);
        return response()->json([
            "status"=> "success",
            "message"=> "okokok",
            "data" => $data
        ]);
    }
}
