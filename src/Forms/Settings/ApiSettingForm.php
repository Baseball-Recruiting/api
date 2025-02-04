<?php

namespace RecruitMe\Api\Forms\Settings;

use RecruitMe\Api\Facades\ApiHelper;
use RecruitMe\Api\Http\Requests\ApiSettingRequest;
use RecruitMe\Base\Forms\FieldOptions\OnOffFieldOption;
use RecruitMe\Base\Forms\Fields\OnOffCheckboxField;
use RecruitMe\Setting\Forms\SettingForm;

class ApiSettingForm extends SettingForm
{
    public function setup(): void
    {
        parent::setup();

        $this
            ->setValidatorClass(ApiSettingRequest::class)
            ->setSectionTitle(trans('packages/api::api.setting_title'))
            ->setSectionDescription(trans('packages/api::api.setting_description'))
            ->contentOnly()
            ->add(
                'api_enabled',
                OnOffCheckboxField::class,
                OnOffFieldOption::make()
                    ->label(trans('packages/api::api.api_enabled'))
                    ->value(ApiHelper::enabled())
                    ->toArray()
            );
    }
}
