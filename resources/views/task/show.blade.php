<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('interface.tasks.show.title') . ": {$task->name}" }}
            <a href="{{ route('tasks.edit', $task) }}" class="text-blue-400 dark:text-blue-400">⚙</a>
        </h2>
    </x-slot>
    <div class="py-12">
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
                                class="inline-flex items-center justify-center rounded-full bg-purple-100 px-2.5 py-0.5 text-sm text-purple-700 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 1024 1024" class="-ms-1 me-1.5 h-6 w-6" version="1.1"><path
                                        d="M657.775 454.41c-28.224 0-51.104 22.924-51.104 51.207 0 28.284 22.881 51.208 51.104 51.208 28.219 0 51.095-22.924 51.095-51.208-0.001-28.284-22.877-51.207-51.095-51.207z"
                                        fill="#4C5AA3"/><path
                                        d="M664.612 635.344H58.188c-26.33 0-47.668 21.339-47.668 47.664v3.672c0 26.324 21.339 47.664 47.668 47.664h606.423c26.324 0 47.664-21.34 47.664-47.664v-3.672c0.001-26.325-21.339-47.664-47.663-47.664z"
                                        fill="#667DC5"/><path
                                        d="M61.649 290.547h-3.461c-26.33 0-47.668 21.339-47.668 47.664V686.68c0 26.324 21.339 47.664 47.668 47.664h3.461c26.325 0 47.66-21.34 47.66-47.664V338.211c0-26.325-21.335-47.664-47.66-47.664z"
                                        fill="#D860B5"/><path
                                        d="M664.612 290.547H58.188c-26.33 0-47.668 21.339-47.668 47.664v3.671c0 26.325 21.339 47.664 47.668 47.664h606.423c26.324 0 47.664-21.339 47.664-47.664v-3.671c0.001-26.325-21.339-47.664-47.663-47.664z"
                                        fill="#F35A50"/><path
                                        d="M1007.218 491.707l-1.666-2.976c-12.875-23.027-41.939-31.229-64.919-18.324L637.527 640.66c-22.972 12.909-31.161 42.034-18.282 65.061l1.667 2.977c12.874 23.026 41.943 31.229 64.919 18.324l303.106-170.254c22.979-12.909 31.165-42.039 18.281-65.061z"
                                        fill="#F9D73B"/><path
                                        d="M990.216 464.146l-304.029-167.72c-23.049-12.716-51.989-4.26-64.641 18.883l-1.632 2.993c-12.651 23.143-4.226 52.212 18.818 64.923l304.034 167.719c23.044 12.716 51.98 4.261 64.632-18.882l1.641-2.994c12.652-23.142 4.226-52.207-18.823-64.922z"
                                        fill="#FD9E22"/></svg>
                                {{ $label->name }}
                            </span>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
