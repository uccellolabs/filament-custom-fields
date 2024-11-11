<?php

namespace Uccello\FilamentCustomFields\Actions;

use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\TextInput;

class ManageCustomFieldsAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->icon('heroicon-s-cog')
            ->label('Champs custom')
            ->form([
                TextInput::make('name'),
            ])
            ->action(function () {});
    }
}
