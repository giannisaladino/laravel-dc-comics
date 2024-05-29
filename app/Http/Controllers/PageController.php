<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $comics = config("comics");

        return view("comics.index", [
            'comics' => $comics,
        ]);
    }

    // public function show();
}
