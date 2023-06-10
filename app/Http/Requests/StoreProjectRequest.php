<?php

namespace App\Http\Requests;

use Illumminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule as ValidationRule;

class StoreProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'max:150', ValidationRule::unique(
                'projects'
            )],
            'number' => 'nullable',
            'type_id' => ['nullable', 'exists:categories,id']
        ];
    }
}
