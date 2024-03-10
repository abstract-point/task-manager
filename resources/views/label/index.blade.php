<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('interface.labels.index.title') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @auth
            <div class="my-4">
                <x-link-button href="{{ route('labels.create') }}">
                    {{ __('interface.labels.index.button') }}
                </x-link-button>
            </div>
        @endauth
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y-2 divide-gray-200 bg-white dark:bg-gray-800 text-sm ">
                        <thead class="text-left">
                        <tr>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-gray-300">{{ __('interface.labels.index.table.id') }}</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-gray-300">{{ __('interface.labels.index.table.name') }}</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-gray-300">{{ __('interface.labels.index.table.description') }}</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-gray-300">{{ __('interface.labels.index.table.created_at') }}</th>
                            @auth
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-gray-300">{{ __('interface.labels.index.table.actions.title') }}</th>
                            @endauth
                        </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200 text-left">
                        @forelse ($labels as $label)
                            <tr>
                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-gray-300">{{ $label->id }}</td>
                                <td class="whitespace-normal break-words px-4 py-2 text-gray-700 dark:text-gray-300">{{ $label->name }}</td>
                                <td class="whitespace-normal break-words px-4 py-2 text-gray-700 dark:text-gray-300">{{ $label->description }}</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-300">{{ $label->created_at }}</td>
                                @auth
                                    <td class="whitespace-normal break-words px-4 py-2 text-gray-700 dark:text-gray-300">
                                        <a href="{{ route('labels.edit', $label) }}"
                                           class="text-blue-400 dark:text-blue-400">
                                            {{ __('interface.labels.index.table.actions.edit') }}
                                        </a>
                                        {{-- <a href="{{ route('tasks.destroy', $status) }}" data-confirm="Вы уверены?" data-method="delete" class="text-red-400 dark:text-red-400">Удалить</a>--}}
                                        <form action="{{ route('labels.destroy', $label) }}" method="POST"
                                              class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <a href="#"
                                               class="text-red-400 dark:text-red-400"
                                               onclick="event.preventDefault();
                                                            if (confirm('{{ __('interface.labels.index.table.actions.alert') }}')) this.closest('form').submit();"
                                            >
                                                {{ __('interface.labels.index.table.actions.delete') }}
                                            </a>
                                        </form>
                                    </td>
                                @endauth
                            </tr>
                        @empty
                            <tr>
                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ __('interface.labels.index.table.actions.no_data') }}</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ __('interface.labels.index.table.actions.no_data') }}</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ __('interface.labels.index.table.actions.no_data') }}</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ __('interface.labels.index.table.actions.no_data') }}</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ __('interface.labels.index.table.actions.no_data') }}</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
