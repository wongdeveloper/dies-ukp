<?php

namespace App\Http\Requests\WIshImage;

use Illuminate\Foundation\Http\FormRequest;

class StoreWishImageRequest extends FormRequest
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
            'name' => 'required|string|min:1',
            'rid' => 'required|integer|exists:roles,id',
            'title' => 'required|string|min:1|max:255',
            'description' => 'required|string|min:1',
            'image' => 'required|image|mimes:png,jpg,jpeg,HEIF|max:10240'
        ];
    }
}
