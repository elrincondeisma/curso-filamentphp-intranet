<?php

namespace App\Filament\Personal\Pages;

use Filament\Pages\Page;

class Settings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Ajustes';

    protected static string $view = 'filament.personal.pages.settings';

    public $count = 1;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }
}
