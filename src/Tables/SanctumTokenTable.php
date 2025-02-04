<?php

namespace RecruitMe\Api\Tables;

use RecruitMe\Api\Models\PersonalAccessToken;
use RecruitMe\Table\Abstracts\TableAbstract;
use RecruitMe\Table\Actions\DeleteAction;
use RecruitMe\Table\BulkActions\DeleteBulkAction;
use RecruitMe\Table\Columns\Column;
use RecruitMe\Table\Columns\CreatedAtColumn;
use RecruitMe\Table\Columns\DateTimeColumn;
use RecruitMe\Table\Columns\IdColumn;
use RecruitMe\Table\Columns\NameColumn;
use RecruitMe\Table\HeaderActions\CreateHeaderAction;
use Illuminate\Database\Eloquent\Builder;

class SanctumTokenTable extends TableAbstract
{
    public function setup(): void
    {
        $this
            ->setView('packages/api::table')
            ->model(PersonalAccessToken::class)
            ->addHeaderAction(CreateHeaderAction::make()->route('api.sanctum-token.create'))
            ->addAction(DeleteAction::make()->route('api.sanctum-token.destroy'))
            ->addColumns([
                IdColumn::make(),
                NameColumn::make(),
                Column::make('abilities')
                    ->label(trans('packages/api::sanctum-token.abilities')),
                DateTimeColumn::make('last_used_at')
                    ->label(trans('packages/api::sanctum-token.last_used_at')),
                CreatedAtColumn::make(),
            ])
            ->addBulkAction(DeleteBulkAction::make())
            ->queryUsing(fn (Builder $query) => $query->select([
                'id',
                'name',
                'abilities',
                'last_used_at',
                'created_at',
            ]));
    }
}
