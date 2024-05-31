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

    public function edit(Comic $comic) {

        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic)
    {
        //VALIDATION
        // $request->validate([
        //     "name"=> "required|max:200",
        //     "attack"=> "required|integer|numeric",
        //     "defence"=> "required|integer|numeric",
        //     "speed"=> "required|integer|numeric",
        //     "life"=> "required|integer|numeric",
        //     "description"=> "required|max:2000",
        // ]);
        $form_data = $request->all();
        $comic->fill($form_data);

        $comic->save();
        return to_route("comics.index", $comic);
    }


    public function destroy(Comic $comic) {

        $comic->delete();

        return to_route('comics.index');
    }


}
