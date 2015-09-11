<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\Request;

class EmailPasswordLinkRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required',
        ];
    }
}
