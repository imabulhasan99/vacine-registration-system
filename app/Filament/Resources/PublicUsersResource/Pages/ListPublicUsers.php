<?php

namespace App\Filament\Resources\PublicUsersResource\Pages;

use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PublicUsersResource;

class ListPublicUsers extends ListRecords
{
    protected static string $resource = PublicUsersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    public function getTabs(): array
    {
        return [
            'alluser' => Tab::make('All Users'),
            'notvacinated' => Tab::make('Not Vacinated')
            ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'notvacinated')),
            'scheduled' => Tab::make('Scheduled')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'scheduled')),
            'vacinated' => Tab::make('Vacinated')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'vacinated')),
        ];
    }
}
