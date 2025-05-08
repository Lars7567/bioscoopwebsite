<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'beschrijving' => 'required|string|max:1000',
            'duur' => 'required|integer|min:1',
            'release_datum' => 'required|date',
            'leeftijdskeuring' => 'required|integer|min:0|max:18',
            'beschikbaarheid' => 'required|boolean',
        ];
    }
}
