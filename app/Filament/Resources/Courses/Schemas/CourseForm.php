<?php

namespace App\Filament\Resources\Courses\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;

use Filament\Schemas\Schema;

class CourseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                TextInput::make('title')
                    ->required(),
                /*TextInput::make('slug')
                    ->required(),*/
                Textarea::make('short_description')
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('thumbnail')
                ->directory('courses')
                ->image()
                ->required(),
                //TextInput::make('promo_video'),
                TextInput::make('level')
                    ->required(),
                TextInput::make('language')
                    ->required()
                    ->default('English'),
                TextInput::make('duration')
                    ->label('Duration In Hours')
                    ->numeric(),
                TextInput::make('price')
                    ->label('Current Price')
                    ->required()
                    ->numeric()
                    ->default(0.0)
                    ->prefix('Rs'),
                TextInput::make('sale_price')
                    ->label('Strike Price')
                    ->numeric()
                    ->required()
                    ->prefix('Rs'),
                //Toggle::make('is_free')
                    //->required(),
                //Toggle::make('is_active')
                    //->required(),
                TextInput::make('meta_title'),
                TextInput::make('meta_description'),


                Repeater::make('modules')
                ->relationship()
                ->schema([

                    TextInput::make('title')->required(),
                    //Toggle::make('is_active'),
                    //TextInput::make('order')->numeric(),

                    Repeater::make('lessons')
                        ->relationship()
                        ->schema([

                            TextInput::make('title')->required(),

                            /*Select::make('type')
                                ->options([
                                    'video' => 'Video',
                                    'pdf' => 'PDF',
                                    'quiz' => 'Quiz',
                                ])
                                ->required(),*/

                            TextInput::make('video_url')->required(),
                                //->visible(fn ($get) => $get('type') === 'video'),

                            //FileUpload::make('video_file')
                                //->directory('lesson-videos')
                                //->acceptedFileTypes(['video/mp4','video/webm']),
                                //->visible(fn ($get) => $get('type') === 'video'),
                            TextInput::make('duration')->numeric()->label('Duration In Hour'),

                            //Toggle::make('is_preview'),
                            //Toggle::make('is_active'),

                        ])
                        ->orderable('order')
                        //->collapsed()
                        ->columnSpanFull(),

                ])
                ->orderable('order')
                ->columnSpanFull(),

            ]);
    }
}
