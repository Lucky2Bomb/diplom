<?php

namespace App\Http\Requests\AdminPanel;

use Illuminate\Foundation\Http\FormRequest;

class AdminPanelUserEditRequest extends FormRequest
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
            'name'          => 'nullable|max:100',
            'surname'       => 'nullable|max:100',
            'patronymic'    => 'nullable|max:100',
            'email'         => 'nullable|max:100|email',
            'password'      => 'nullable|min:8|max:100',
            'position_name' => 'nullable|exists:positions,name',
            'roles'         => 'nullable|array',
        ];
    }
}
