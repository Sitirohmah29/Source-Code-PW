<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            "Title" => "Hello World!",
            "NPM" => "2123210054",
            "students" => [
                ["NPM" => "2123210054", "name" => "Siti Rohmah"],
                ["NPM" => "2123210054", "name" => "Siti Rohmah"],
                ["NPM" => "2123210054", "name" => "Siti Rohmah"],
                ["NPM" => "2123210054", "name" => "Siti Rohmah"],
                ["NPM" => "2123210054", "name" => "Siti Rohmah"],
            ]
        ];
        return view("modules.home.home", ["data" => $data]);
    }
}
