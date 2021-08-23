<?php

namespace App\Http\Requests\WishVideo;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWishVideoRequest extends FormRequest
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
            'wid' => 'required|integer|exists:wishes,id',
            'wish' => 'nullable|string',
            'video_title' => 'nullable|string|min:1|max:255',
            'video' => 'nullable|string',
            'is_vip' => 'nullable|integer'
        ];
    }
}
