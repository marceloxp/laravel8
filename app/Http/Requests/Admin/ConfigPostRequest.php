<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ConfigPostRequest extends FormRequest
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
            'name' => 'required|max:255|unique:configs,name,' . $this->id . ',id,deleted_at,NULL',
            'value'  => 'required|max:255',
            'flags' => 'nullable|integer',
            'status' => 'required|in:Ativo,Inativo'
        ];
    }
}
