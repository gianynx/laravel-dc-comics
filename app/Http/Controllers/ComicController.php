<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    public function store(Request $request)
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
        // $form_data = $request->all();
        $form_data = $this->validation($request->all());
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
    public function update(Request $request, Comic $comic)
    {
        // $form_data = $request->all();
        // dd($form_data);
        $form_data = $this->validation($request->all());
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

    private function validation($data)
    {
        $validation = Validator::make($data, [
            'title' => 'required|unique:comics|string|max:200|min:3',
            'description' => 'required|min:3',
            'thumb' => 'required|url',
            'price' => 'required|numeric',
            'series' => 'required|unique:comics|string|max:200|min:3',
            'sale_date' => 'nullable|date',
            'type' => 'required|string|max:200|min:3'
        ],[
            'title.required' => 'Il titolo è obbligatorio!',
            'title.max' => 'Il titolo non deve superare i 200 caratteri!',
            'title.min' => 'Il titolo deve contenere almeno 3 caratteri!',
            'description.required' => 'La descrizione è obbligatoria!',
            'description.min' => 'La descrizione deve contenere almeno 3 caratteri!',
            'thumb.required' => "L'URL dell'immagine è obbligatoria!",
            'thumb.url' => "Dovresti inserire una URL di un'immagine!",
            'price.required' => "Il prezzo è obbligatorio!",
            'price.numeric' => "Dovresti inserire un numero!",
            'series.required' => "Il titolo della serie è obbligatorio!",
            'series.max' => 'Il titolo non deve superare i 200 caratteri!',
            'series.min' => 'Il titolo deve contenere almeno 3 caratteri!',
            'sale_date.date' => 'Dovresti inserire una data!',
            'type.required' => 'Il tipo è obbligatorio!',
            'type.max' => 'Il tipo non deve superare i 200 caratteri!',
            'type.min' => 'Il tipo deve contenere almeno 3 caratteri!'
        ])->validate();
        return $validation;
    }
}
