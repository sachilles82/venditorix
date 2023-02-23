<?php

namespace App\Filament\Resources\ObjectionResource\Pages;

use App\Filament\Resources\ObjectionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListObjections extends ListRecords
{
    protected static string $resource = ObjectionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
