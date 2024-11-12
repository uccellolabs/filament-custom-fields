<?php

namespace Uccello\FilamentCustomFields\Components;

use Filament\Forms\Components\Section as ComponentsSection;
use Livewire\Attributes\On;

class Section extends ComponentsSection
{
    protected string $view = 'filament-custom-fields::components.filament.custom-section';

    #[On('update-order')]
    public function updateOrder($order)
    {
        dd('ici');
        foreach ($order as $field) {
            $model = config('filament-custom-fields.model');
            $model::where('id', $field['id'])->update(['sequence' => $field['order']]);
        }

        // Rafraîchir l'affichage pour montrer l'ordre mis à jour
        $this->mount();
    }
}
