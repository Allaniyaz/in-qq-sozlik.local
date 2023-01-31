<?php

namespace App\Filament\Resources\DictionaryResource\Pages;

use App\Filament\Resources\DictionaryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDictionary extends EditRecord
{
    protected static string $resource = DictionaryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
