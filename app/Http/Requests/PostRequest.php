<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'images' => 'nullable',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'city' => 'required|string|max:100',
            'rooms' => 'required|integer|min:1',
            'kitchens' => 'required|integer|min:0',
            'bedrooms' => 'required|integer|min:0',
            'bathrooms' => 'required|integer|min:0',
            'category' => 'required|in:rent,sell',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The title is required.',
            'image.image' => 'The file must be a valid image.',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'image.max' => 'The image size must not exceed 1MB.',
            'image.dimensions' => 'The image must have minimum dimensions of 100x100 pixels.',
            'description.required' => 'The description is required.',
            'price.numeric' => 'The price must be a numeric value.',
            'category.in' => 'The category must be either Rent or Sell.',
        ];
    }

}
