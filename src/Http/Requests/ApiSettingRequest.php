<?php

namespace RecruitMe\Api\Http\Requests;

use RecruitMe\Base\Rules\OnOffRule;
use RecruitMe\Support\Http\Requests\Request;

class ApiSettingRequest extends Request
{
    public function rules(): array
    {
        return [
            'api_enabled' => [new OnOffRule()],
        ];
    }
}
