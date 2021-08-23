<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreBlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // if (Auth::user()->isAdmin) {
        //     return true;
        // }
        // return false;
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
            'title' => 'required|string|min:1|max:128',
            'description' => 'required|string|min:1',
            'image' => 'required|image|mimes:png,jpg,jpeg,HEIF|max:10240',
            'video' => 'nullable|string'
        ];
    }
}
