<?php

namespace RecruitMe\Api\Forms;

use RecruitMe\Api\Http\Requests\StoreSanctumTokenRequest;
use RecruitMe\Api\Models\PersonalAccessToken;
use RecruitMe\Base\Forms\FieldOptions\NameFieldOption;
use RecruitMe\Base\Forms\Fields\TextField;
use RecruitMe\Base\Forms\FormAbstract;

class SanctumTokenForm extends FormAbstract
{
    public function buildForm(): void
    {
        $this
            ->setupModel(new PersonalAccessToken())
            ->setValidatorClass(StoreSanctumTokenRequest::class)
            ->add('name', TextField::class, NameFieldOption::make()->toArray());
    }
}
