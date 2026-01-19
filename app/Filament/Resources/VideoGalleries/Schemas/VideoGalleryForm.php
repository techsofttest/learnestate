<?php

namespace App\Filament\Resources\VideoGalleries\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class VideoGalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('youtube_url')
                    ->label('Video ID')
                    ->required(),
            ]);
    }
}
