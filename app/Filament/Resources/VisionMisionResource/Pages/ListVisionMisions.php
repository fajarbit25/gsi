<?php

namespace App\Filament\Resources\VisionMisionResource\Pages;

use App\Filament\Resources\VisionMisionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVisionMisions extends ListRecords
{
    protected static string $resource = VisionMisionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
