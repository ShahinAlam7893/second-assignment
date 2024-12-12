<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cookie;


use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id){
        $name = "Donald Trump";
        $age = "75";

        $data = [
            "id" => $id,
            "name" => $name,
            "age" => $age
        ];

        $cookie = cookie("access_token", "123-XYZ", time()+ 60,"/",$_SERVER['SERVER_NAME'],false, true);
        
        return response()->json($data, 200)->cookie($cookie);
    }
}
