<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'unique:posts,title'],
            'description' => ['required'],
            'body' => ['required'],
            'featured_image' => ['nullable', 'mimes:png,jpg,jpeg', 'max:2048'],
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'The :attribute is required',
        ];
    }
}
