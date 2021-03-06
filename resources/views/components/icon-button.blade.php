@php
    $hasConfirmation = $hasConfirmConfiguration();

    $buttonClasses = [
        'flex items-center justify-center w-10 h-10 rounded-full hover:bg-gray-500/5 focus:outline-none',
        'text-primary-500 focus:bg-primary-500/10' => $color === 'primary',
        'text-danger-500 focus:bg-danger-500/10' => $color === 'danger',
        'text-gray-500 focus:bg-gray-500/10' => $color === 'secondary',
        'text-success-500 focus:bg-success-500/10' => $color === 'success',
        'text-warning-500 focus:bg-warning-500/10' => $color === 'warning',
        'dark:hover:bg-gray-300/5' => $darkMode,
        'opacity-70 cursor-not-allowed pointer-events-none' => $disabled,
    ];

    $iconClasses = \Illuminate\Support\Arr::toCssClasses([
        'w-3 h-3' => $size === 'sm',
        'w-4 h-4' => $size === 'md',
        'w-5 h-5' => $size === 'lg',
    ]);
@endphp

@if ($tag === 'button' || $hasConfirmation)
    <button
        @if ($tooltip)
            x-data="{}"
            x-tooltip.raw="{{ $tooltip }}"
        @endif
        @if($hasConfirmation)
            @click="$dispatch('open-confirm-modal', {confirmation: {{ $getJsonConfirmConfiguration() }} })"
            type="button"
        @else
            type="{{ $type }}"
        @endif
        {!! $disabled ? 'disabled' : '' !!}
        {{ $attributes->class($buttonClasses) }}
    >
        @if ($label)
            <span class="sr-only">
                {{ $label }}
            </span>
        @endif

        <x-dynamic-component :component="$icon" :class="$iconClasses" />
    </button>
@elseif ($tag === 'a')
    <a
        @if ($tooltip)
            x-data="{}"
            x-tooltip.raw="{{ $tooltip }}"
        @endif
        {{ $attributes->class($buttonClasses) }}
    >
        @if ($label)
            <span class="sr-only">
                {{ $label }}
            </span>
        @endif

        <x-dynamic-component :component="$icon" :class="$iconClasses" />
    </a>
@endif
