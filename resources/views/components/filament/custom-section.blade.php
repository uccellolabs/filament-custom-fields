@php
    $isAside = $isAside();
@endphp

<x-filament::section
:aside="$isAside"
:collapsed="$isCollapsed()"
:collapsible="$isCollapsible() && (! $isAside)"
:compact="$isCompact()"
:content-before="$isFormBefore()"
:description="$getDescription()"
:footer-actions="$getFooterActions()"
:footer-actions-alignment="$getFooterActionsAlignment()"
:header-actions="$getHeaderActions()"
:heading="$getHeading()"
:icon="$getIcon()"
:icon-color="$getIconColor()"
:icon-size="$getIconSize()"
:persist-collapsed="$shouldPersistCollapsed()"
:attributes="
    \Filament\Support\prepare_inherited_attributes($attributes)
        ->merge([
            'id' => $getId(),
        ], escape: false)
        ->merge($getExtraAttributes(), escape: false)
        ->merge($getExtraAlpineAttributes(), escape: false)
"
>
    <x-slot name="heading">
        {{ $getHeading() }}
    </x-slot>

    <div
        wire:end.stop="{{ 'updateOrder( $event.target.sortable.toArray())' }}"
        x-sortable :data-sortable-animation-duration="150" class="grid grid-cols-2" style="grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 1rem;">
            @foreach ($getChildComponentContainer()->getComponents() as $field)
                <div class="draggable-field" x-sortable-item="{{ $field->getId() }}">
                    <div x-sortable-handle>{{ $field->render() }}</div>
                </div>
            @endforeach
    </div>
</x-filament::section>
