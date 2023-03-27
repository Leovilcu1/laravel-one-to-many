<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// helpers

use Illuminate\Validation\Rule;

class UpdatePostRequest extends FormRequest

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
                "title"=>[
                    "required",
                    Rule::unique('posts')->ignore($this->post),
                    "max:128",
                ],
                "content"=>"required|max:4096",
                "img"=>"nullable|image|max:7048",
                "delete_img"=>"nullable"
        ];
    }
}
