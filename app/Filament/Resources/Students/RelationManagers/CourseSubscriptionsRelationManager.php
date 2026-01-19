<?php

namespace App\Filament\Resources\Students\RelationManagers;

use App\Filament\Resources\Students\StudentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

class CourseSubscriptionsRelationManager extends RelationManager
{
    protected static string $relationship = 'courses';

    protected static ?string $relatedResource = StudentResource::class;

    public function table(Table $table): Table
    {
        return $table
        ->columns([
            Filament\Tables\Columns\TextColumn::make('title'),
            Filament\Tables\Columns\TextColumn::make('pivot.status'),
            Filament\Tables\Columns\TextColumn::make('pivot.ends_at')->date(),
        ]);
    }
}
