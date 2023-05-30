<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

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
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $form_data = $request->all();
        $newComic = new Comic();
        // $newComic->title = $form_data['title'];
        // $newComic->description = $form_data['description'];
        // $newComic->thumb = $form_data['thumb'];
        // $newComic->price = $form_data['price'];
        // $newComic->series = $form_data['series'];
        // $newComic->sale_date = $form_data['sale_date'];
        // $newComic->type = $form_data['type'];
        $newComic->fill($form_data);
        $newComic->save();
        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     */
    public function show($comic)
    {
        $comic = Comic::findOrFail($comic);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     */
    public function edit($comic)
    {
        $comic = Comic::findOrFail($comic);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     */
    public function update(Request $request, $comic)
    {
        $form_data = $request->all();
        // dd($form_data);
        $updatedComic = Comic::findOrFail($comic);
        $updatedComic->update($form_data);
        return redirect('comics.show', $updatedComic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
