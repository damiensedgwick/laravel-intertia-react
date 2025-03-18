<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;

class AnotherPageController extends Controller
{
    public function index()
    {
        $number_of_users = User::count();
        $message = 'You have ' . $number_of_users . ' users in your database';

        return Inertia::render('anotherpage', [
            'message' => $message
        ]);
    }
}
