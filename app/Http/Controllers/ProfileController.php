<?php

namespace App\Http\Controllers;

use App\Interest;
use App\Profile;
use App\Vocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function create()
    {
        $interests = Interest::all();
        $vocations = Vocation::all();
        return view('admin.profile.create', compact('interests', 'vocations'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required|string|max:100',
            'bio' => 'required|string|max:150',
            'interest' => 'required',
            'vocation' => 'required|string',
            'address' => 'required|string|max:100',
            'local' => 'required|string|max:100',
            'profile_pix' => 'file|mimes:jpeg,jpg,png|max:2048'
        ]);

        $profile = new Profile;

        $profile->description = $request->description;
        $profile->bio = $request->bio;
        $profile->address = $request->address;
        $profile->local = $request->local;
        $profile->state = $request->state;

        if($request->hasFile('profile_pix')){
            $file = $request->file('profile_pix');
            $fileName = time() . $file->getClientOriginalName();
            $path = $file->storeAs('profilePix', $fileName);
            $profile->profile_pix = $path;
        }

        $profile->user()->associate(Auth::user());
        $profile->vocation()->associate($request->vocation);

        $profile->save();
        $profile->interests()->sync($request->interest);

        Session::flash('message', 'Profile updated successfully');
        return back();

    }
}
