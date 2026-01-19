<?php

namespace App\Filament\Resources\ImageGalleries;

use App\Filament\Resources\ImageGalleries\Pages\CreateImageGallery;
use App\Filament\Resources\ImageGalleries\Pages\EditImageGallery;
use App\Filament\Resources\ImageGalleries\Pages\ListImageGalleries;
use App\Filament\Resources\ImageGalleries\Schemas\ImageGalleryForm;
use App\Filament\Resources\ImageGalleries\Tables\ImageGalleriesTable;
use App\Models\ImageGallery;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ImageGalleryResource extends Resource
{
    protected static ?string $model = ImageGallery::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Image Gallery';

    public static function form(Schema $schema): Schema
    {
        return ImageGalleryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ImageGalleriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListImageGalleries::route('/'),
            'create' => CreateImageGallery::route('/create'),
            'edit' => EditImageGallery::route('/{record}/edit'),
        ];
    }
}
