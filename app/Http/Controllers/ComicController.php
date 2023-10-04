<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     */
    public function store(StoreComicRequest $request) // Sto utilizzando una richiesta HTTP per inviare dati al server. Sto utilizzando un oggetto di tipo StoreComicRequest per gestire i dati inviati.
    {
        // $request->validate([
        //     'title' => 'required|max:200|min:3',
        //     'description' => 'required',
        //     'thumb' => 'required',
        //     'price' => 'required|numeric',
        //     'series' => 'required|max:200|min:3',
        //     'sale_date' => 'nullable|date',
        //     'type' => 'required|max:200|min:3'
        // ]);

        $form_data = $request->validated();

        // $form_data = $request->all(); // $request->all() restituisce un array associativo contenente tutti i dati della richiesta.
        // $newComic = new Comic();
        // $newComic->title = $form_data['title'];
        // $newComic->description = $form_data['description'];
        // $newComic->thumb = $form_data['thumb'];
        // $newComic->price = $form_data['price'];
        // $newComic->series = $form_data['series'];
        // $newComic->sale_date = $form_data['sale_date'];
        // $newComic->type = $form_data['type'];
        // $newComic->fill($form_data);
        // $newComic->save();

        $newComic = Comic::create($form_data);
        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic $comic
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic $comic
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Comic $comic
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        // $form_data = $request->all();
        // dd($form_data);

        $form_data = $request->validated();

        $comic->update($form_data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic $comic
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('message', "The comic has been successfully deleted!");
    }
}
