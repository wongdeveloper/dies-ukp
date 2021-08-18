<?php

namespace App\Http\Requests\Wish;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWishRequest extends FormRequest
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
            'name' => 'required|string|min:1|max:256',
            'rid' => 'required|integer|exists:roles,id',
            'wish' => 'nullable|string',
        ];
    }
}
