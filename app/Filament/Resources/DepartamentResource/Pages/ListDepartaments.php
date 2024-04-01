<?php

namespace App\Filament\Resources\DepartamentResource\Pages;

use App\Filament\Resources\DepartamentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDepartaments extends ListRecords
{
    protected static string $resource = DepartamentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
