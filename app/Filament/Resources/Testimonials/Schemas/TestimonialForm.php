<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('location'),
                Textarea::make('text')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->directory('testimonials')
                    ->image(),
            ]);
    }
}
