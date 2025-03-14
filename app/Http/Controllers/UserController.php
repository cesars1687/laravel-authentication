<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index(Request $request): View
    {

        $users = User::all()->except(auth()->user()->id);
        return  view('users.index', compact('users'));
    }

}
