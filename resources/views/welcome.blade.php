<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('interface.title') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="overflow-x-auto">
                    @guest
                        <h2>
                            {{ __('interface.welcome.title') }}
                        </h2>
                        <p>
                            {!! nl2br(__('interface.welcome.text_guest')) !!}
                        </p>
                    @endguest
                    @auth
                        <p>
                            {!! nl2br(__('interface.welcome.text_authed')) !!}
                        </p>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
