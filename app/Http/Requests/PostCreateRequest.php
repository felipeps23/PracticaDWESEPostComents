<?php

namespace App\Http\Requests;

use App\Http\Requests\PostRequest;
use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
{
    use PostRequest {
        rules as traitrules;
        messages as traitmessages;
    }
    
    public function rules()
    {
        return array_merge(
            $this->traitrules(), 
            ['name' => 'required|min:2|max:60|unique:enterprise,name']
        );
    }
    
    public function messages() {
        $unique   = 'El campo :attribute debe ser único.';
        return array_merge(
            $this->traitmessages(), 
            ['name.unique' => $unique]
        );
    }
}
