<?php

namespace App\Filament\Resources\ImageGalleries\Pages;

use App\Filament\Resources\ImageGalleries\ImageGalleryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditImageGallery extends EditRecord
{
    protected static string $resource = ImageGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
