<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{

    /**
     * Render Dashboard page
     */
    public function dashboard()
    {
        return  Inertia::render('Dashboard');
    }

    /**
     * Render Students page
     */
    public function students(){
        return  Inertia::render('Students');
    }
}
