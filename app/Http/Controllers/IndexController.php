<?php

namespace App\Http\Controllers;

use App\Models\Animal;

class IndexController extends Controller {
    public function index() {
        $animals = Animal::all();
        $title = 'Nos animaux';

        return view('index', compact('animals', 'title'));
    }
}