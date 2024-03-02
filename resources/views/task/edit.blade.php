<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('interface.tasks.edit.title') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <form method="POST" action="{{ route('tasks.update', $task) }}">

                    @method('PATCH')
                    @csrf
                    <!-- Name -->
                    @include('task.form')

                    <!-- Button -->
                    <div class="flex items-center justify-start mt-10">
                        <x-primary-button class="">
                            {{ __('interface.tasks.edit.button') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
