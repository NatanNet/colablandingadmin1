<x-filament-panels::page>
    <x-filament::card>
        <div class="text-lg font-semibold">
            Selamat datang, {{ auth()->user()->name }}
        </div>
        <div class="mt-2 text-sm text-gray-600">
            Ini adalah dashboard admin SportEase
        </div>
    </x-filament::card>
</x-filament-panels::page>
