<?php

namespace App\Filament\Resources\ObjectionResource\Pages;

use App\Filament\Resources\ObjectionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditObjection extends EditRecord
{
    protected static string $resource = ObjectionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
