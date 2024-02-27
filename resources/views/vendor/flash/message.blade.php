@foreach (session('flash_notification', collect())->toArray() as $message)
    <div class="{{ $message['level'] === 'info' ? 'border-2 dark:border-blue-400 dark:bg-gray-900 dark:text-blue-400' : '' }}
                {{ $message['level'] === 'success' ? 'border-2 dark:border-green-400 dark:bg-gray-900 dark:text-green-400' : '' }}
                {{ $message['level'] === 'danger' ? 'border-2 dark:border-red-400 dark:bg-gray-900 dark:text-red-400' : '' }}
                {{ $message['level'] === 'warning' ? 'border-2 dark:border-yellow-400 dark:bg-gray-900 dark:text-yellow-400' : '' }}
                py-4 px-4" role="alert">
      <span class="font-bold block sm:inline">{{ $message['message'] }}</span>
    </div>
@endforeach

{{ session()->forget('flash_notification') }}
