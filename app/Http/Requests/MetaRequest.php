<?php

namespace App\Http\Requests;

use App\Http\Requests\VideoRequest;

class MetaRequest extends VideoRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type' => 'nullable|string',
            'key' => 'required|string',
            'value' => 'required|string',
        ];
    }
}
