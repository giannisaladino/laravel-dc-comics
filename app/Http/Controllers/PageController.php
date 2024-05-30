<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $comics = Comic::all();

        return view("comics.index", compact("comics"));
    }

    public function show(Comic $comic){

        return view('comics.show', compact('comic'));

    }

    public function create() {

        return view('comics.create');
    }

    public function store(Request $request) {

        $form_data = $request->all();

        $new_comic = Comic::create($form_data);
        // dump('store funziona');
        return to_route('comics.show', $new_comic);
    }
}
