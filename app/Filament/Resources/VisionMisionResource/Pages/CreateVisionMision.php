<?php

namespace App\Filament\Resources\VisionMisionResource\Pages;

use App\Filament\Resources\VisionMisionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateVisionMision extends CreateRecord
{
    protected static string $resource = VisionMisionResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
