<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use PhpParser\Node\Name;

use function Laravel\Prompts\form;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(components: [
                Forms\Components\Section::make(heading: 'Detials')
                ->description('Enter the Project Details')
                ->schema([
                Forms\Components\TextInput::make('title')
                ->label('Name')
                ->required(),
                Forms\Components\RichEditor::make('description')
                ->label('Description')
                ->required(),
                Forms\Components\FileUpload::make('cover')
                ->image(),
                ]),
               Forms\Components\Section::make(heading: 'Budget & Status')
               ->schema([
                Forms\Components\Select::make('category_id')
                ->label(label: 'Category')
                ->preload()
                ->relationship('category', 'name')
                ->searchable()
                ->required(),
                Forms\Components\TextInput::make('budget')
                ->label('Budget')
                ->prefix('Rp')
                ->required(),
                Forms\Components\Select::make('status')
                ->label('Status')
                ->inlineLabel()
                ->default(false),
               ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
               Tables\Columns\TextColumn::make('title'),
               Tables\Columns\TextColumn::make('category.name')
                    ->badge()
                    ->label('Category'),
                Tables\Columns\TextColumn::make('budget')
                    ->badge()
                    ->money('Rp'),
                Tables\Columns\IconColumn::make('status')
                ->icon(fn (string $state): string => match ($state) {
                    '0' => 'heroicon-o-x-cancel',
                    '1' => 'heroicon-o-check-circle',
                })->color(fn (string $state): string => match ($state) {
                    '0' => 'danger',
                    '1' => 'success',
                }),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
