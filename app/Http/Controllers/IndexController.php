<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $name = "Marega Diama Ndaw";
        // return "<h1>Index</h1>";
        return inertia("Index/Index",[
            "name"  => $name,
            "age"   => 12,
            "hobies"=> ["Quran","Sport","Dev"],
            "sexe"  => "M",
            "level" => "L3"
        ]);
    }

    public function show()
    {
        return inertia("Index/Show");
    }
}
