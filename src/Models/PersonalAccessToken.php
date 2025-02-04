<?php

namespace RecruitMe\Api\Models;

use RecruitMe\Base\Contracts\BaseModel;
use RecruitMe\Base\Models\Concerns\HasBaseEloquentBuilder;
use RecruitMe\Base\Models\Concerns\HasMetadata;
use RecruitMe\Base\Models\Concerns\HasUuidsOrIntegerIds;
use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken;

class PersonalAccessToken extends SanctumPersonalAccessToken implements BaseModel
{
    use HasMetadata;
    use HasUuidsOrIntegerIds;
    use HasBaseEloquentBuilder;
}
