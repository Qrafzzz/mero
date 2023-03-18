<?php

namespace App\Http\Requests;

class CreatePostRequest extends PostRequest
{
    public function rules(): array
    {
        $rules = parent::rules();
        $rules["photo"] = ["required", "file"];
        $rules['title'] = ["nullable", "string", "unique:posts"];
        return $rules;

    }
}
