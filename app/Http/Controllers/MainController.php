<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\User;
use Inertia\Inertia;

class MainController extends Controller
{
    public function home()
    {
        $users = User::all();

        return Inertia::render('Home', [
            'currentPage' => 'home',
            'users' => $users
        ]);
    }

    public function conditionals()
    {
        return Inertia::render('Conditionals', [
            'currentPage' => 'home',
            'assignments' => Assignment::all(),
        ]);
    }
}
