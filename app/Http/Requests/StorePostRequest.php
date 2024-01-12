<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=> ['required', 'min:3', 'max:200', 'unique:posts'],
            'body' => ['nullable'],
            'image'=> ['nullable', 'url']
        ];
    }

    public function messages()
    {
       return[
           'title.required' => 'Il titolo è obbligatorio',
           'title.min' => 'Il titolo deve avere :min caratteri',
           'title.max' => 'Il titolo deve avere :max caratteri',
           'title.unique' => 'Il titolo deve essere univoco',
           'image.url' => 'L\immagine deve essere di tipo URL'
       ];
    }
}
