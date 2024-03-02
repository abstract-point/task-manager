@foreach (session('flash_notification', collect())->toArray() as $message)
    <div x-data="{ open: true }">
        <div class="{{ $message['level'] === 'info' ? 'border-2 dark:border-amber-500 dark:bg-gray-900 dark:text-amber-500' : '' }}
                    {{ $message['level'] === 'success' ? 'border-2 dark:border-indigo-500 dark:bg-gray-900 dark:text-indigo-500' : '' }}
                    {{ $message['level'] === 'warning' ? 'border-2 dark:border-red-600 dark:bg-gray-900 dark:text-red-600' : '' }}
                    py-4 px-4 rounded-xl flex justify-between" role="alert" x-show="open">
            <span class="font-bold">{{ $message['message'] }}</span>

            <button @click="open = false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none">
                    <path d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5" stroke="#dc2626" stroke-width="1.5"
                          stroke-linecap="round"/>
                    <path
                        d="M22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C21.5093 4.43821 21.8356 5.80655 21.9449 8"
                        stroke="#dc2626" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </button>
        </div>
    </div>
@endforeach

{{ session()->forget('flash_notification') }}
