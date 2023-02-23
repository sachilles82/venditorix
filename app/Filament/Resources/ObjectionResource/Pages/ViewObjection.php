<?php

namespace App\Filament\Resources\ObjectionResource\Pages;

use App\Filament\Resources\ObjectionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewObjection extends ViewRecord
{
    protected static string $resource = ObjectionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
