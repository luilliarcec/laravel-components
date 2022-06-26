@props([
    'darkMode' => false,
])

<div
    x-data="{open: false, data: {}}" x-show="open"
    role="dialog" aria-modal="true"
    x-transition:enter="ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    style="display: none;"
    {{ $attributes->class('relative z-10') }}
>
    <div class="fixed inset-0 bg-black/50 transition-opacity"></div>

    <div class="fixed z-10 inset-0 overflow-y-auto">
        <div
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0"
        >
            <div
                @class([
                    'relative bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full sm:p-6',
                    'dark:bg-gray-800' => $darkMode,
                ])
            >
                {{ $slot }}

                <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">
                    {{ $actions }}
                </div>
            </div>
        </div>
    </div>
</div>
