<?php

namespace App\Filament\Resources\VisionMisionResource\Pages;

use App\Filament\Resources\VisionMisionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVisionMision extends EditRecord
{
    protected static string $resource = VisionMisionResource::class;

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
