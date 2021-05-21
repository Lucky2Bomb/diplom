<?php

namespace App\Http\Requests\Publication;

use Illuminate\Foundation\Http\FormRequest;

class PublicationCommentRequest extends FormRequest
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

    public function all($keys = null)
    {
        $data = parent::all();
        $data['id'] = $this->route('id');

        return $data;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'reply_user_id' => 'nullable|integer|exists:users,id',
            'description'   => 'required|string|min:1|max:255',
            'id'            => 'required|integer|exists:publications,id'
        ];
    }
}
