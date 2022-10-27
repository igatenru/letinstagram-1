<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request): View
    {
        $query = $request->all();
        //dd($query);
        $imgsrc = 'https://cdn2.hexlet.io/assets/logo_ru-495f05850e0095ea722a2b583565d492719579c02b0ce61d924e4f895fabf781.svg';
        return view('welcome', compact('query', 'imgsrc'));
    }
}
