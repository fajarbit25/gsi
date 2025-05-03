<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisionMisionResource\Pages;
use App\Filament\Resources\VisionMisionResource\RelationManagers;
use App\Models\VisionMision;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VisionMisionResource extends Resource
{
    protected static ?string $model = VisionMision::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Select::make('segment')
                    ->options([
                        'Visi'      => 'Visi',
                        'Misi'      => 'Misi'
                    ]),
                    TextInput::make('value'),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('segment'),
                TextColumn::make('value'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListVisionMisions::route('/'),
            'create' => Pages\CreateVisionMision::route('/create'),
            'edit' => Pages\EditVisionMision::route('/{record}/edit'),
        ];
    }
}
