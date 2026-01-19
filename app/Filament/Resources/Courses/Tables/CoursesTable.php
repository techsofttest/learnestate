<?php

namespace App\Filament\Resources\Courses\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class CoursesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                ImageColumn::make('thumbnail'),
                TextColumn::make('price')
                    ->money('INR')
                    ->sortable(),
                TextColumn::make('sale_price')
                    ->money('INR')
                    ->sortable(),
                /*ToggleColumn::make('is_free')
                ->label('Is Free')
                ->onColor('success')
                ->offColor('danger'),*/
                /*ToggleColumn::make('is_active')
                ->label('Active')
                ->onColor('success')
                ->offColor('danger'),*/
               
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
