<?php

namespace App\Filament\Resources\CalendarResource\Pages;

use App\Filament\Resources\CalendarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCalendars extends ListRecords
{
    protected static string $resource = CalendarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
