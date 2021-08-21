<?php

namespace App\Http\Requests\Wish;

use Illuminate\Foundation\Http\FormRequest;

class StoreWishRequest extends FormRequest
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
            'name' => 'required|string|min:1|max:256',
            'kategori' => 'required|integer|exists:roles,id',
            'email' => 'required|email',
            'detail1' => 'nullable|string',
            'detail2' => 'nullable|string',
            'jurusan' => 'nullable|string',
            'angkatan' => 'nullable|string',
            'wish' => 'nullable|string',
            'image_title' => 'nullable|string|min:1|max:255',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,HEIF|max:10240',
            'video_title' => 'nullable|string|min:1|max:255',
            'video' => 'nullable|string'
        ];
    }
}
