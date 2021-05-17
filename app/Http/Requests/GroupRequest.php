<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroupRequest extends FormRequest
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
            'name'                          => 'required|string|min:3|max:255',
            'start_date'                    => 'nullable|date',
            'end_date'                      => 'nullable|date',

            'is_closed'                     => 'required|boolean',

            'group_form_of_studying_type'   => 'nullable|exists:group_form_of_studyings,name',
            'university_name'               => 'nullable|exists:group_universities,name',
            'faculty_name'                  => 'nullable|exists:group_faculties,name',
            'specialty_name'                => 'nullable|exists:group_specialties,name',
        ];
    }
}
