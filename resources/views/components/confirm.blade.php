@php
    $darkMode = config('components.dark_mode');
@endphp

<x-components::modal
    :dark-mode="$darkMode"
    @open-confirm-modal.window="open = true; data = $event.detail.confirmation"
>
    <form :method="data.method === 'get' ? 'get' : 'post'" :action="data.url">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" :value="data.method">

        <div>
            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-gray-600">
                <x-heroicon-s-question-mark-circle class="h-6 w-6 text-primary-600"/>
            </div>

            <div class="mt-3 text-center sm:mt-5">
                <h3
                    x-text="data.title"
                    @class([
                        'text-lg leading-6 font-medium text-gray-900',
                        'dark:text-white' => $darkMode
                    ])>
                </h3>

                <div class="mt-2">
                    <p
                        x-text="data.description"
                        @class([
                            'text-sm text-gray-500',
                            'dark:text-gray-400' => $darkMode
                        ])>
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">
            <x-components::button @click="open = false" color="gray" :dark-mode="$darkMode">
                {{ __('No, cancel') }}
            </x-components::button>

            <x-components::button type="submit" :dark-mode="$darkMode">
                {{ __('Yes, continue') }}
            </x-components::button>
        </div>
    </form>
</x-components::modal>
