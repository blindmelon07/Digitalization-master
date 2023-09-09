<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MemberResource\Pages;
use App\Filament\Resources\MemberResource\RelationManagers;
use App\Models\Member;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                
                Forms\Components\TextInput::make('members_id')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('full_name')
                    ->maxLength(30),
                Forms\Components\TextInput::make('Address')
                    ->maxLength(60),
                Forms\Components\TextInput::make('Cellphone_num')
                    ->tel()
                    ->maxLength(36),
                Forms\Components\TextInput::make('Gender')
                    ->maxLength(6),
                Forms\Components\TextInput::make('Geograph_group')
                    ->maxLength(30),
                Forms\Components\TextInput::make('Date_of_birth')
                    ->maxLength(13),
                Forms\Components\TextInput::make('Age')
                    ->maxLength(3),
                Forms\Components\TextInput::make('civil_status')
                    ->maxLength(12),
                Forms\Components\TextInput::make('bussi_emp_name')
                    ->maxLength(22),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('members_id')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('full_name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Cellphone_num')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Gender')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Geograph_group')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Date_of_birth')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Age')
                    ->searchable(),
                Tables\Columns\TextColumn::make('civil_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bussi_emp_name')
                    ->searchable(),
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
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMember::route('/create'),
            'edit' => Pages\EditMember::route('/{record}/edit'),
        ];
    }
}
