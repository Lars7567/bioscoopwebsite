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
            'description' => 'required|string|max:1000',
            'duration' => 'required|integer|min:1',
            'release_date' => 'required|date',
            'start_time' => 'required|date_format:Y-m-d\TH:i',
            'age_rating' => 'required|integer|min:0|max:18',
            'availability' => 'required|boolean',
        ];
    }
}
