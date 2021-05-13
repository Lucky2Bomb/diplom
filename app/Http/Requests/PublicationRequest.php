<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublicationRequest extends FormRequest
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
            'title'                 => 'required|string|min:3|max:250',
            'description'           => 'required|string|min:3',
            'preview_text'          => 'required|string|min:3|max:250',
            'preview_image'         => 'nullable|image|max:5120|mimes:jpg',
            'is_published'          => 'required|boolean',
            // 'user_id'               => 'required|integer|exists:users,id',
        ];
    }
}
