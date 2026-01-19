<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->directory('blogs')
                    ->image(),
                TextInput::make('meta_title'),
                TextInput::make('meta_description'),
                Textarea::make('header_scripts')
                    ->columnSpanFull(),
                Textarea::make('footer_scripts')
                    ->columnSpanFull(),
                DatePicker::make('published_date')
                    ->required(),
            ]);
    }
}
