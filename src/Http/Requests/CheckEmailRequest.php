<?php

namespace RecruitMe\Api\Http\Requests;

use RecruitMe\Support\Http\Requests\Request;

class CheckEmailRequest extends Request
{
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'],
        ];
    }

    public function bodyParameters()
    {
        return [
            'email' => [
                'example' => 'e.g: abc@example.com',
            ],
        ];
    }
}
