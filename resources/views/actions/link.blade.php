<x-components::link
    :tag="$getUrl() ? 'a' : 'button'"
    :href="$isEnabled() ? $getUrl() : null"
    :target="$shouldOpenUrlInNewTab() ? '_blank' : null"
    :color="$getColor()"
    :size="$getSize()"
    :icon="$getIcon()"
    :icon-position="$getIconPosition()"
    :tooltip="$getTooltip()"
    :disabled="$isDisabled()"
    :dark-mode="config('tables.dark_mode')"
>
    {{ $getLabel() }}
</x-components::link>
