<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class coursesController extends Controller
{
    public function show($page)
    {
        $filePath = storage_path("coursesInformation/{$page}.json");

        if (file_exists($filePath)) {
            $jsonData = file_get_contents($filePath);
            $data = json_decode($jsonData, true);

            return view("coursePages.{$page}", ['data' => $data]);
        } else {
            abort(404);
        }
    }
}
