<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('interface.tasks.index.title') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-4">
                <x-link-button href="{{ route('tasks.create') }}">
                    {{ __('interface.tasks.index.button') }}
                </x-link-button>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y-2 divide-gray-200 bg-white dark:bg-gray-800 text-sm ">
                            <thead class="text-left">
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-gray-300">{{ __('interface.tasks.index.table.id') }}</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-gray-300">{{ __('interface.tasks.index.table.status') }}</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-gray-300">{{ __('interface.tasks.index.table.name') }}</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-gray-300">{{ __('interface.tasks.index.table.author') }}</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-gray-300">{{ __('interface.tasks.index.table.performer') }}</th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-gray-300">{{ __('interface.tasks.index.table.created_at') }}</th>
                                @auth
                                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-gray-300">{{ __('interface.tasks.index.table.actions') }}</th>
                                @endauth
                            </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 text-left">
                            @forelse ($tasks as $task)
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-gray-300">{{ $task->id }}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-300">{{ $task->status->name }}</td>
                                    <td class="whitespace-normal break-words px-4 py-2 text-gray-700 dark:text-gray-300">
                                        <a href="{{ route('tasks.show', $task) }}" class="text-blue-400 dark:text-blue-400">{{ $task->name }}</a>
                                    </td>
                                    <td class="whitespace-normal break-words px-4 py-2 text-gray-700 dark:text-gray-300">{{ $task->creator->name }}</td>
                                    <td class="whitespace-normal break-words px-4 py-2 text-gray-700 dark:text-gray-300">{{ $task->assignee->name ?? ''}}</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700 dark:text-gray-300">{{ $task->created_at }}</td>
                                    @auth
                                        <td class="whitespace-normal break-words px-4 py-2 text-gray-700 dark:text-gray-300">
                                            <a href="{{ route('tasks.edit', $task) }}"
                                               class="text-blue-400 dark:text-blue-400">Изменить</a>
                                            {{-- <a href="{{ route('tasks.destroy', $status) }}" data-confirm="Вы уверены?" data-method="delete" class="text-red-400 dark:text-red-400">Удалить</a>--}}
                                            @if(Auth::user()->id === $task->creator->id)
                                                <form action="{{ route('tasks.destroy', $task) }}" method="POST"
                                                      class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-500 dark:text-red-400"
                                                            onclick="return confirm('Вы уверены?')">Удалить
                                                    </button>
                                                </form>
                                            @endif
                                        </td>
                                    @endauth
                                </tr>
                            @empty
                                <tr>
                                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">No data</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">No data</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">No data</td>
                                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">No data</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
