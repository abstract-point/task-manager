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
                            class="inline-flex items-center justify-center rounded-full bg-purple-100 px-2.5 py-0.5 text-sm text-purple-700 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 1024 1024" class="-ms-1 me-1.5 h-6 w-6"> <path
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
</x-app-layout>
