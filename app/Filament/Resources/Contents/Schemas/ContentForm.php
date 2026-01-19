<?php

namespace App\Filament\Resources\Contents\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ContentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->disabled(),
                RichEditor::make('content')
                    ->required()
                    ->columnSpanFull(),
                //FileUpload::make('image')
                    //->image(),
            ]);
    }
}
