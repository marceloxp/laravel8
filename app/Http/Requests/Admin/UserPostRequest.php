<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserPostRequest extends FormRequest
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
            'name'  => 'required|min:3|max:150',
            'email' => 'required|min:5|max:255|unique:users,email,' . $this->id . ',id,deleted_at,NULL',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password' => [Rule::requiredIf(empty($this->id))],
            'status' => 'required|in:Ativo,Inativo',
            'roles' => 'required|array',
        ];
    }
}
