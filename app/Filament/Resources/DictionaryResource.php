<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DictionaryResource\Pages;
use App\Filament\Resources\DictionaryResource\RelationManagers;
use App\Models\Dictionary;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DictionaryResource extends Resource
{
    protected static ?string $model = Dictionary::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationLabel = 'Sózlik';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('word')
                    ->label('Sóz')->required(),
                Forms\Components\RichEditor::make('definition')
                    ->label('Ańlatpası')->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('#')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('word')
                    ->label('Sóz')->sortable()->searchable(),
                // Tables\Columns\TextColumn::make('definition'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Qosılǵan waqtı')->dateTime('d.m.Y H:i')->sortable(),
                // Tables\Columns\TextColumn::make('updated_at')->dateTime()->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
            'index' => Pages\ListDictionaries::route('/'),
            'create' => Pages\CreateDictionary::route('/create'),
            'edit' => Pages\EditDictionary::route('/{record}/edit'),
        ];
    }
}
