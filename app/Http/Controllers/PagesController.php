<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class PagesController extends Controller
{

    /*
     * Main Index page of application, home page. Bringing login and register props from jetstream, plus all users for testimonials section.
     */

    public function index()
    {
        return Inertia::render('Home', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'users' => User::where('role', '!=' ,'admin')->get()
        ]);
    }

    /*
     * About page of application, bringing login and register props from jetstream.
     */

    public function about()
    {
        return Inertia::render('About', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    }

    /*
     * Contact page of application, bringing login and register props from jetstream.
     */

    public function contact()
    {
        return Inertia::render('Contact', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    }

    /*
     * Main Forum page of application, bringing login and register props from jetstream.
     */

    public function forum()
    {
        return Inertia::render('Forum', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    }

    /*
     * Main Host page of application, bringing login and register props from jetstream.
     */

    public function hosts()
    {
        return Inertia::render('Hosts', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    }
}
