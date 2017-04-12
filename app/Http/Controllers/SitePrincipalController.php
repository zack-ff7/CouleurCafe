<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitePrincipalController extends Controller
{
    public function index()
    {
        return view('app.accueil');
    }
}
