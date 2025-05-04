<?php

namespace App\Filament\Resources\PartnertResource\Pages;

use App\Filament\Resources\PartnertResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePartnert extends CreateRecord
{
    protected static string $resource = PartnertResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
