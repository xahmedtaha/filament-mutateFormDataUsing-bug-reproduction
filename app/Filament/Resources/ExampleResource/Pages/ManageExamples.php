<?php

namespace App\Filament\Resources\ExampleResource\Pages;

use App\Filament\Resources\ExampleResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageExamples extends ManageRecords
{
    protected static string $resource = ExampleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                // This doesn't get called !
                ->mutateFormDataUsing(function (array $data): array {
                    dd($data);
                    $data['random_number'] = rand(0, 10);
                    return $data;
                }),
        ];
    }
}
