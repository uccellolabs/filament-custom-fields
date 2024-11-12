<?php

namespace Uccello\FilamentCustomFields\Components;

use Filament\Forms\Components\Section as ComponentsSection;

class Section extends ComponentsSection
{
    protected string $view = 'filament-custom-fields::components.filament.custom-section';

    public static function updateOrder($order)
    {
        foreach ($order as $sequence => $id) {
            $model = config('filament-custom-fields.model');
            $model::where('id', $id)->update(['sequence' => $sequence]);
        }
    }
}
