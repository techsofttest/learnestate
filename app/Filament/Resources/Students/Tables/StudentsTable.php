<?php

namespace App\Filament\Resources\Students\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\Action;
use Filament\Tables\Table;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ToggleColumn;

class StudentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
           ->columns([

            TextColumn::make('name')->searchable(),

            TextColumn::make('email')->searchable(),

            ToggleColumn::make('is_active')
                ->label('Active')
                ->onColor('success')
                ->offColor('danger'),
            TextColumn::make('created_at')->dateTime(),
            
            ])
            ->filters([
                //
            ])
            ->recordActions([
                 Action::make('resetDevice')
                ->label('Reset Device')
                ->icon('heroicon-o-device-phone-mobile')
                ->color('warning')
                ->requiresConfirmation()
                ->action(function ($record) {
                    $record->update([
                        'device_fingerprint' => null,
                        'last_login_at' => null,
                    ]);
                }),
                //EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    //DeleteBulkAction::make(),
                ]),
            ]);
    }
}
