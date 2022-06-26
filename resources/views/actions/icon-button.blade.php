<x-components::icon-button
    :tag="$getUrl() ? 'a' : 'button'"
    :href="$isEnabled() ? $getUrl() : null"
    :target="$shouldOpenUrlInNewTab() ? '_blank' : null"
    :label="$getLabel()"
    :color="$getColor()"
    :icon="$getIcon()"
    :tooltip="$getTooltip()"
    :disabled="$isDisabled()"
    :dark-mode="config('components.dark_mode')"
    :confirmation="$getJsonConfirmConfiguration()"
/>
