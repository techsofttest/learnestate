<?php

namespace App\Filament\Resources\SeoMetas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SeoMetaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                TextInput::make('page')
                    ->required(),
                TextInput::make('meta_title')
                    ->required(),
                TextInput::make('meta_description')
                    ->required(),
                Textarea::make('header_scripts')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('footer_scripts')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
