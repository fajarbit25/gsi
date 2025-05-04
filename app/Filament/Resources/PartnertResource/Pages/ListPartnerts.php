<?php

namespace App\Filament\Resources\PartnertResource\Pages;

use App\Filament\Resources\PartnertResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPartnerts extends ListRecords
{
    protected static string $resource = PartnertResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
