<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function __invoke()
    {
        $images = Images::all();

        return view('mainPage', [
            'images' => $images
        ]);
    }

}
