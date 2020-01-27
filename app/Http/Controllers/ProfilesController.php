<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;

class ProfilesController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index(User $user) {

        User::findorfail($user);
        return view('profile.index', compact('user'));
    }

    public function create() {

        return view('profile.create');
    }

    public function store() {
        $data = request()->validate([
            'address' => 'required',
            'city'  =>  'required',
            'country' => 'required'
        ]);

        auth()->user()->profiles()->create($data);

        redirect('/profile/{user}');
    }

    public function show() {

    }
}
