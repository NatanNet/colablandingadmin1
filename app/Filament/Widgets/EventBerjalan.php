<?php

namespace App\Filament\Widgets;

use App\Models\Event;
use Carbon\Carbon;
use Filament\Widgets\TableWidget;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;

class EventBerjalan extends TableWidget
{
    protected static ?string $heading = 'Event Berjalan';

    protected function getTableQuery(): Builder|Relation|null
    {
        // Jangan filter langsung di sini supaya filter bulan bisa bekerja
        return Event::query()->orderBy('tanggal_mulai', 'asc');
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('nama_event')->label('Nama Event')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('lokasi')->label('Lokasi'),
            Tables\Columns\TextColumn::make('tanggal_mulai')->date()->label('Mulai'),
            Tables\Columns\TextColumn::make('tanggal_selesai')->date()->label('Selesai'),
            Tables\Columns\ImageColumn::make('banner_image')->label('Banner')->square(),
        ];
    }

    protected function getTableFilters(): array
    {
        return [
            SelectFilter::make('bulan')
                ->label('Filter Bulan')
                ->options([
                    'today' => 'Hari Ini',
                    '1' => 'Januari',
                    '2' => 'Februari',
                    '3' => 'Maret',
                    '4' => 'April',
                    '5' => 'Mei',
                    '6' => 'Juni',
                    '7' => 'Juli',
                    '8' => 'Agustus',
                    '9' => 'September',
                    '10' => 'Oktober',
                    '11' => 'November',
                    '12' => 'Desember',
                ])
                ->default('today') // Tampilkan event hari ini sebagai default
                ->query(function (Builder $query, array $data) {
                    $value = $data['value'];

                    if ($value === 'today') {
                        $today = Carbon::now()->toDateString();
                        $query->where('tanggal_mulai', '<=', $today)
                            ->where('tanggal_selesai', '>=', $today);
                    } else {
                        $query->where(function ($q) use ($value) {
                            $q->whereMonth('tanggal_mulai', $value)
                                ->orWhereMonth('tanggal_selesai', $value);
                        });
                    }
                }),
        ];
    }
}
