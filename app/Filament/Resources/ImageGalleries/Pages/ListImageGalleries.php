<?php

namespace App\Filament\Resources\ImageGalleries\Pages;

use App\Filament\Resources\ImageGalleries\ImageGalleryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListImageGalleries extends ListRecords
{
    protected static string $resource = ImageGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
