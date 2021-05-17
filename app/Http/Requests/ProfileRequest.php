<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'name'                      => 'nullable|string|max:100',
            'surname'                   => 'nullable|string|max:100',
            'patronymic'                => 'nullable|string|max:100',

            'vk'                        => 'nullable|string|max:100',
            'ok'                        => 'nullable|string|max:100',
            'telegram'                  => 'nullable|string|max:100',
            'facebook'                  => 'nullable|string|max:100',
            'phone_number'              => 'nullable|string|max:100',

            // 'position_name'             => 'nullable|exists:positions,name',

            // 'avatar'                    => 'nullable|image|max:5120|mimes:jpg',
            // 'header_background_image'   => 'nullable|image|max:5120|mimes:jpg',
        ];
    }
}
