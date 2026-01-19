<?php

namespace App\Filament\Resources\ImageGalleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ImageGalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                TextInput::make('title')
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    ->directory('gallery')
                    ->required(),
            ]);
    }
}
