<?php

namespace RecruitMe\Api\Http\Controllers;

use RecruitMe\Api\Forms\Settings\ApiSettingForm;
use RecruitMe\Api\Http\Requests\ApiSettingRequest;
use RecruitMe\Api\Tables\SanctumTokenTable;
use RecruitMe\Setting\Http\Controllers\SettingController;

class ApiController extends SettingController
{
    public function edit(SanctumTokenTable $sanctumTokenTable)
    {
        $this->pageTitle(trans('packages/api::api.settings'));

        $this->breadcrumb()
            ->add(trans('core/setting::setting.title'), route('settings.index'))
            ->add(trans('packages/api::api.settings'));

        $form = ApiSettingForm::create();

        $sanctumTokenTable->setAjaxUrl(route('api.sanctum-token.index'));

        return view('packages/api::settings', compact('form', 'sanctumTokenTable'));
    }

    public function update(ApiSettingRequest $request)
    {
        return $this->performUpdate($request->validated());
    }
}
