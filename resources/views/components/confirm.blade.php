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

        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="sm:flex sm:items-start">
                <div
                    class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-gray-100 sm:mx-0 sm:h-10 sm:w-10"
                >
                    <x-heroicon-o-question-mark-circle class="h-6 w-6 text-gray-400"/>
                </div>

                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 x-text="data.title" class="text-lg leading-6 font-medium text-gray-900"></h3>
Luis
                    <div class="mt-2">
                        <p class="text-sm text-gray-500" x-text="data.description"></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-gray-100 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <x-components::button type="submit" :dark-mode="$darkMode">
                {{ __('Yes, continue') }}
            </x-components::button>

            <x-components::button @click="open = false" color="gray" :dark-mode="$darkMode">
                {{ __('No, cancel') }}
            </x-components::button>
        </div>
    </form>
</x-components::modal>
