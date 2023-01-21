<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommunityStoreRequest extends FormRequest
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
            'name' => ['required', 'unique:communities'],
            'slug' => ['required', 'unique:communities'],
            'description' => ['required', 'min:5']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Please enter a community name.",
            'name.unique' => "Community name was already exist.",
            'slug.required' => "Please enter a slug name for community.",
            'slug.unique' => "Community slug name was already exist.",
            'description.required' => "Please enter description of community.",
            'description.min' => "Description of community must be greater than 5.",
        ];
    }
}
