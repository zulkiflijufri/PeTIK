<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoUpdateRequest extends FormRequest
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
            'title' => 'required',
            'embed' => 'required|unique:videos,embed,'.$this->video->id. ',id'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul video harus diisi!',
            'embed.required' => 'Embed harus diisi!',
            'embed.unique' => 'Embed ini sudah ada!'
        ];
    }
}