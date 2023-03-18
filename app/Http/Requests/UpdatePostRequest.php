<?php

namespace App\Http\Requests;

class UpdatePostRequest extends PostRequest
{
    public function rules(): array
    {
        $rules = parent::rules();
        $rules["photo"] = ["nullable", "file"];
        $rules["title"] = ["nullable", "string", "unique:posts,title," .$this->id];
        return $rules;

    }
}
