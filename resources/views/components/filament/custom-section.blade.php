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

    <div x-data="{init() {
                new Sortable(document.getElementById('sortable-fields'), {
                    animation: 150,
                    onEnd: function(evt) {
                        let order = Array.from(document.querySelectorAll('.draggable-field')).map((el, index) => {
                            return { id: el.getAttribute('data-id'), order: index };
                        });

                        // Appelle la fonction Livewire pour mettre à jour l'ordre
                        $wire.dispatch('update-order', order);

                        console.log(order)
                    },
                });
            }}" class="custom-section">
        <div id="sortable-fields" class="grid grid-cols-2" style="grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 1rem;">
            @foreach ($getChildComponentContainer()->getComponents() as $i => $field)
                <div class="draggable-field" data-id="{{ $field->getId() }}">
                    {{ $field->render() }}
                </div>
            @endforeach
        </div>
    </div>
</x-filament::section>
