<?php

namespace App\Filament\Resources\PublicUsersResource\Pages;

use App\Filament\Resources\PublicUsersResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPublicUsers extends EditRecord
{
    protected static string $resource = PublicUsersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
