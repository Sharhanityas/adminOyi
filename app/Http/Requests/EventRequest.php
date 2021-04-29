<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'judul_event' => 'required|max:255',
            'tanggal_event' => 'required|date',
            'waktu' => 'required',
            'tempat' => 'required|max:255',
            'deskripsi' => 'required'
        ];
    }
}
