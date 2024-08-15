<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 mr-2">
                {{ __('interface.tasks.show.title') . ": {$task->name}" }}
            </h2>
            <a href="{{ route('tasks.edit', $task) }}">
                <svg
                    width="28px"
                    height="28px"
                    viewBox="0 0 1024 1024"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <title>Редактировать</title>
                    <path
                        d="M823.3 938.8H229.4c-71.6 0-129.8-58.2-129.8-129.8V215.1c0-71.6 58.2-129.8 129.8-129.8h297c23.6 0 42.7 19.1 42.7 42.7s-19.1 42.7-42.7 42.7h-297c-24.5 0-44.4 19.9-44.4 44.4V809c0 24.5 19.9 44.4 44.4 44.4h593.9c24.5 0 44.4-19.9 44.4-44.4V512c0-23.6 19.1-42.7 42.7-42.7s42.7 19.1 42.7 42.7v297c0 71.6-58.2 129.8-129.8 129.8z"
                        fill="#3688FF"/>
                    <path
                        d="M483 756.5c-1.8 0-3.5-0.1-5.3-0.3l-134.5-16.8c-19.4-2.4-34.6-17.7-37-37l-16.8-134.5c-1.6-13.1 2.9-26.2 12.2-35.5l374.6-374.6c51.1-51.1 134.2-51.1 185.3 0l26.3 26.3c24.8 24.7 38.4 57.6 38.4 92.7 0 35-13.6 67.9-38.4 92.7L513.2 744c-8.1 8.1-19 12.5-30.2 12.5z m-96.3-97.7l80.8 10.1 359.8-359.8c8.6-8.6 13.4-20.1 13.4-32.3 0-12.2-4.8-23.7-13.4-32.3L801 218.2c-17.9-17.8-46.8-17.8-64.6 0L376.6 578l10.1 80.8z"
                        fill="#5F6379"/>
                </svg>
            </a>
        </div>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <p class="mt-4 text-gray-500 dark:text-gray-300 text-sm leading-relaxed">
                        <span
                            class="mt-6 text-l font-semibold text-gray-900 dark:text-white">{{ __('interface.tasks.show.name') . ": "}}</span>
                    {{ $task->name }}
                </p>
                <p class="mt-4 text-gray-500 dark:text-gray-300 text-sm leading-relaxed">
                        <span
                            class="mt-6 text-l font-semibold text-gray-900 dark:text-white">{{ __('interface.tasks.show.status') . ": "}}</span>
                    {{ $task->status->name }}
                </p>
                <p class="mt-4 text-gray-500 dark:text-gray-300 text-sm leading-relaxed">
                        <span
                            class="mt-6 text-l font-semibold text-gray-900 dark:text-white">{{ __('interface.tasks.show.description') . ": "}}</span>
                    {{ $task->description }}
                </p>
                <p class="mt-4 text-gray-500 dark:text-gray-300 text-sm leading-relaxed">
                        <span
                            class="mt-6 text-l font-semibold text-gray-900 dark:text-white">{{ __('interface.tasks.show.labels') . ": "}}</span>
                </p>
                <div class="mt-2 flex flex-wrap gap-y-4">
                    @foreach($task->labels as $label)
                        <span
                            class="inline-flex items-end gap-1 justify-between border border-slate-600 rounded-full px-2 py-0.5 text-sm text-purple-700 mr-2">
                                <svg width="24px" height="22px" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.721 21H13.358C15.5854 21 16.6992 21 17.6289 20.4672C18.5586 19.9345 19.1488 18.958 20.3294 17.005L21.0102 15.8787C22.0034 14.2357 22.5 13.4142 22.5 12.5C22.5 11.5858 22.0034 10.7643 21.0102 9.12126L20.3294 7.99501C19.1488 6.04203 18.5586 5.06554 17.6289 4.53277C16.6992 4 15.5854 4 13.358 4H10.721C6.84561 4 4.90789 4 3.70394 5.2448C2.5 6.48959 2.5 8.49306 2.5 12.5C2.5 16.5069 2.5 18.5104 3.70394 19.7552C4.90789 21 6.8456 21 10.721 21Z"
                                            stroke="#5c5c5c" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path d="M7.5 7.99512V17" stroke="#5c5c5c" stroke-width="1.5"
                                              stroke-linecap="round"></path>
                                </svg>
                                {{ $label->name }}
                        </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
