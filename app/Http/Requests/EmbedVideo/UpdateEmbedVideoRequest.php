<?php

namespace App\Http\Requests\EmbedVideo;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateEmbedVideoRequest extends FormRequest
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
            'evid' => 'required|integer|exists:embed_videos,id',
            'name' => 'required|string|min:1|max:128',
            'video' => 'required|string'
        ];
    }
}
