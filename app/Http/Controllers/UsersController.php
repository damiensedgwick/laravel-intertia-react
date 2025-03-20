<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class UsersController extends Controller
{
    /**
     * Display a listing of the users.
     */
    public function index(): Response
    {
        return Inertia::render('users', [
            'users' => User::all(),
        ]);
    }
}
