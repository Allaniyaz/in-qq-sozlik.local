<?php

namespace App\Filament\Resources\DictionaryResource\Pages;

use App\Filament\Resources\DictionaryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDictionaries extends ListRecords
{
    protected static string $resource = DictionaryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Sóz qosıw'),
        ];
    }
}
