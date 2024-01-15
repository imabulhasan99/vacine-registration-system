<?php

namespace App\Filament\Resources\PublicUsersResource\Pages;

use App\Filament\Resources\PublicUsersResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePublicUsers extends CreateRecord
{
    protected static string $resource = PublicUsersResource::class;
}
