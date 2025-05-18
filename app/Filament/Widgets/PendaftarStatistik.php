<?php

namespace App\Filament\Widgets;

use App\Models\Pendaftar;
use Filament\Widgets\LineChartWidget;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PendaftarStatistik extends LineChartWidget
{
    protected static ?string $heading = 'Statistik Pendaftar Tahun Ini';

    protected function getData(): array
    {
        $tahunIni = Carbon::now()->year;

        // Query untuk hitung jumlah pendaftar per bulan tahun ini
        $data = Pendaftar::selectRaw('MONTH(created_at) as bulan, COUNT(*) as total')
            ->whereYear('created_at', $tahunIni)
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->pluck('total', 'bulan')
            ->toArray();

        // Siapkan label bulan 1-12
        $labels = [];
        for ($i = 1; $i <= 12; $i++) {
            $labels[] = Carbon::create()->month($i)->format('F'); // Januari, Februari, dst
        }

        // Siapkan data lengkap untuk semua bulan (jika bulan kosong, isi 0)
        $values = [];
        for ($i = 1; $i <= 12; $i++) {
            $values[] = $data[$i] ?? 0;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Pendaftar',
                    'data' => $values,
                    'backgroundColor' => 'rgba(54, 162, 235, 0.5)',
                    'borderColor' => 'rgba(54, 162, 235, 1)',
                    'fill' => true,
                ],
            ],
            'labels' => $labels,
        ];
    }
}
