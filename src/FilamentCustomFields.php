<?php

namespace Uccello\FilamentCustomFields;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class FilamentCustomFields
{
    public function getCustomFields($resource, $section = null)
    {
        $model = config('filament-custom-fields.model');

        return $model::where('resource', $resource)
            ->orderBy('sequence')
            ->get()
            ->map(function ($field) {
                return match ($field->type) {
                    'text' => TextInput::make('data.' . $field->name)
                        ->id($field->id)
                        ->label($this->getLocalizedOption($field, 'label', $field->name))
                        ->placeholder($this->getLocalizedOption($field, 'placeholder', null))
                        ->helperText($this->getLocalizedOption($field, 'helperText', null))
                        ->required($this->getOption($field, 'required'))
                        ->url($this->getOption($field, 'url'))
                        ->integer($this->getOption($field, 'integer')),

                    'password' => TextInput::make('data.' . $field->name)
                        ->id($field->id)
                        ->password()
                        ->label($this->getLocalizedOption($field, 'label', $field->name))
                        ->placeholder($this->getLocalizedOption($field, 'placeholder', null))
                        ->helperText($this->getLocalizedOption($field, 'helperText', null))
                        ->required($this->getOption($field, 'required')),

                    'select' => Select::make('data.' . $field->name)
                        ->id($field->id)
                        ->label($this->getLocalizedOption($field, 'label', $field->name))
                        ->placeholder($this->getLocalizedOption($field, 'placeholder', null))
                        ->helperText($this->getLocalizedOption($field, 'helperText', null))
                        ->options($this->getLocalizedOption($field, 'options') ?? [])
                        ->searchable($this->getOption($field, 'searchable'))
                        ->required($this->getOption($field, 'required')),
                    default => null,
                };
            })->filter()->toArray();
    }

    protected function getOption($field, $option, $defaultValue = false)
    {
        return $field['data'][$option] ?? $defaultValue;
    }

    protected function getLocalizedOption($field, $option, $defaultValue = false)
    {
        return $field->data[$option][app()->getLocale()] ?? $defaultValue;
    }
}
