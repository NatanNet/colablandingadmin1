<?php
namespace App\Filament\Pages;

use App\Filament\Widgets\EventBerjalan;
use App\Filament\Widgets\PendaftarStatistik;
use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    protected static string $view = 'filament.pages.dashboard';

    protected function getHeaderWidgets(): array
    {
        return [
            PendaftarStatistik::class,
            EventBerjalan::class,
        ];
    }
}
