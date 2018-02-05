<?php

namespace App\Http\Controllers;

use App\Interest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function create()
    {
        $interests = Interest::all();
        return view('admin.profile.create', compact('interests'));
    }
}
