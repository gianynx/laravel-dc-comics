<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:comics|string|max:200|min:3',
            'description' => 'required|min:3',
            'thumb' => 'required|url',
            'price' => 'required|numeric',
            'series' => 'required|unique:comics|string|max:200|min:3',
            'sale_date' => 'nullable|date',
            'type' => 'required|string|max:200|min:3'
        ];
    }

    public function messages()
    {
        return [
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
        ];
    }
}
