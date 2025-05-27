<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PendaftarResource\Pages;
use App\Models\Pendaftar;
use Filament\Forms;
use Filament\Forms\Form;
//use Filament\Pages\Actions\EditAction;
use Filament\Tables\Actions\EditAction;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Illuminate\Database\Eloquent\Model;

class PendaftarResource extends Resource
{
    protected static ?string $model = Pendaftar::class;
    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    // Menonaktifkan tombol "Tambah"
    public static function canCreate(): bool
    {
        return false;
    }

    // (Opsional) Menonaktifkan tombol Edit
    public static function canEdit(Model $record): bool
    {
        return true;
    }

    // (Opsional) Menonaktifkan tombol Delete
    public static function canDelete(Model $record): bool
    {
        return true;
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('nama')->required()->maxLength(255)->disabled(),
            TextInput::make('nomer_hp')->required()->maxLength(14)->disabled(),
            Textarea::make('alamat')->required()->maxLength(255)->disabled(),
            Select::make('kategori_olahraga')->options([
                'football' => 'Football',
                'basketball' => 'Basketball',
                'volleyball' => 'Volleyball',
                'badminton' => 'Badminton',
            ])->required()->disabled(),
            Select::make('status')->options([
                'pending' => 'Pending',
                'approved' => 'Approved',
                'rejected' => 'Rejected',
            ])->default('pending')->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('nama')->searchable(),
                TextColumn::make('nomer_hp'),
                TextColumn::make('alamat'),
                TextColumn::make('kategori_olahraga'),
                BadgeColumn::make('status'),
                TextColumn::make('created_at')->dateTime(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')->options([
                    'pending' => 'Pending',
                    'approved' => 'Approved',
                    'rejected' => 'Rejected',
                ]),
            ])
            ->actions([
                EditAction::make(),
            ]); // Menonaktifkan semua aksi baris
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPendaftars::route('/'),
            // Halaman create & edit tetap bisa diakses jika dibutuhkan secara paksa, tapi tidak akan muncul tombolnya
        ];
    }
}
