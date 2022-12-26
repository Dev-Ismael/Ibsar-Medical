<?php

namespace App\Http\Requests\Responsibilities;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreResponsibilityRequest extends FormRequest
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
            'title'           => ['required' , 'string' , 'max:100' , Rule::unique('services', 'title')->ignore($this->service)],
            'summary'         => ['required' , 'string' , 'max:255'],
            'seo_title'       => ['required' , 'string' , 'max:500'],
            'seo_description' => ['required' , 'string' , 'max:1000'],
            'seo_keywords'    => ['required' , 'string' , 'max:1000'],
            'visibility'      => ['required' , 'numeric' , 'digits_between:1,11' ],
            'content'         => ['required' , 'string' ],
            'img'             => ['required' , 'mimes:jpeg,png,jpg' , 'max:2048'],
        ];
    }
}
