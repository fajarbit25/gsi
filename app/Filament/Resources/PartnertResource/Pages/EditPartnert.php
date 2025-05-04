<?php

namespace App\Filament\Resources\PartnertResource\Pages;

use App\Filament\Resources\PartnertResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPartnert extends EditRecord
{
    protected static string $resource = PartnertResource::class;

    protected function getHeaderActions(): array
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
