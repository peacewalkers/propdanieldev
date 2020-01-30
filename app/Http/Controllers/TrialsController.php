<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrialsController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index() {
        return view('trials.index', compact('trials'));
    }

    public function create() {
        
    }

    public function show() {

    }

    public function store() {

    }

    public function edit() {

    }

    public function update() {

    }

    public function destroy() {

    }

}
