<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 mr-2">
                {{ __('interface.tasks.show.title') . ": {$task->name}" }}
            </h2>
            <a href="{{ route('tasks.edit', $task) }}" class="text-blue-400 dark:text-blue-400">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px"
                     height="30px" viewBox="0 0 512 512" id="Layer_1" version="1.1" xml:space="preserve">
                    <path
                        d="M222.1,405.1l-111.4-86.5c-5.2-4.1,9.5-23,14.7-19l111.4,86.5C242,390.2,224.3,406.8,222.1,405.1z"
                        fill="#0BDC49"/>
                    <path
                        d="M375.4,195.9l-99.8-77.6c-5.2-4.1,9.5-23,14.7-19l99.8,77.6C395.3,181,377.5,197.6,375.4,195.9z"
                        fill="#0BDC49"/>
                    <path
                        d="M100.1,470c-4.8,0-9.5-1.6-13.4-4.5c-6.7-5.1-9.9-13.7-8.3-21.9l27.2-137.2c0.3-1.5,1-3,1.9-4.2L274.7,86.8    l15.6-20.3c21.3-27.5,60.9-32.6,88.4-11.4l30.9,23.8c27.5,21.2,32.6,60.8,11.4,88.3L239.5,404.1c-1,1.3-2.2,2.3-3.6,2.9    c-15.7,7.5-115,54.4-130.7,61.8C103.6,469.5,101.8,470,100.1,470C100.1,470,100.1,470,100.1,470z M127.7,316.3l-25,127.8    c18.4-8.7,117.8-56.5,117.8-56.5L402,152.5c13.1-17,9.9-41.5-7.1-54.7L364,74.1c-17-13.1-41.6-9.9-54.8,7.1l-15.6,20.3    L127.7,316.3z"
                        fill="#6040EC"/>
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
                <div class="mt-2 flex">
                    @foreach($task->labels as $label)
                        <span
                            class="inline-flex items-end gap-1 justify-between border border-slate-600 rounded-full px-2 py-0.5 text-sm text-purple-700 mr-2">
                                <svg width="24px" height="22px" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.721 21H13.358C15.5854 21 16.6992 21 17.6289 20.4672C18.5586 19.9345 19.1488 18.958 20.3294 17.005L21.0102 15.8787C22.0034 14.2357 22.5 13.4142 22.5 12.5C22.5 11.5858 22.0034 10.7643 21.0102 9.12126L20.3294 7.99501C19.1488 6.04203 18.5586 5.06554 17.6289 4.53277C16.6992 4 15.5854 4 13.358 4H10.721C6.84561 4 4.90789 4 3.70394 5.2448C2.5 6.48959 2.5 8.49306 2.5 12.5C2.5 16.5069 2.5 18.5104 3.70394 19.7552C4.90789 21 6.8456 21 10.721 21Z"
                                            stroke="#5c5c5c" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path d="M7.5 7.99512V17" stroke="#5c5c5c" stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                                {{ $label->name }}
                        </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
