<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request): View
    {
        User::create([

        ]);

        return view('welcome');
    }

    public function register(Request $request): RedirectResponse
    {
        dd($request->all());
        return to_route('home');
    }
}
