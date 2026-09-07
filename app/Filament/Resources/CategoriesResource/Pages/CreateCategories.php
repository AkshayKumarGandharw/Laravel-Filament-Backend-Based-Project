<?php

namespace App\Filament\Resources\CategoriesResource\Pages;

use App\Filament\Resources\CategoriesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateCategories extends CreateRecord
{
    protected static string $resource = CategoriesResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification {

        return Notification::make()
        ->success()
        ->title('Category created')
        ->body('The Category has been saved successfully.');
    }
}
