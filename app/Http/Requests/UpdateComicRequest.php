<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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

            'title' => 'required|max:50|min:5',
            'description' => 'required|max:700|min:5',
            'thumb' => 'required|min:15',
            'price' => 'required|max:15',
            'series' => 'required|max:50',
            'sale_date' => 'required|date',
            'type' => 'required|max:30',
            'artists' => 'required',
            'writers' => 'required',

        ];
    }

    public function messages()
    {
        return [

            'title.required' => 'The title of the comic is mandatory',
            'title.max' => 'The title can be a max of 50 characters length',
            'title.min' => 'The title must be at least 5 characters length',
            'description.required' => 'Description is mandatory',
            'description.max' => 'The description can be a max of 700 characters length',
            'description.min' => 'The description must be at least 5 characters length',
            'thumb.required' => 'Image is mandatory',
            'thumb.min' => 'Image URL must be at least 15 characters length',
            'price.required' => 'Price is mandatory',
            'price.max' => 'Price can be a max of 10 characters length',
            'series.required' => 'Series name is mandatory',
            'series.max' => 'Series name can be a max of 50 characters length',
            'sale_date.required' => 'Sale Date is mandatory',
            'sale_date.date' => 'The date must be in the format YYYY-MM-DD',
            'type.required' => 'Comic/s type is mandatory',
            'type.max' => 'Comic/s type can be a max of 30 characters length',
            'artists.required' => 'Artists name are mandatory',
            'writers.required' => 'Writers name are mandatory'

        ];
    }
}
