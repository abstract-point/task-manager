@foreach (session('flash_notification', collect())->toArray() as $message)
<div class="{{ $message['level'] === 'info' ? 'bg-blue-100 border-blue-400 text-blue-700' : '' }}
            {{ $message['level'] === 'success' ? 'bg-green-100 border-green-400 text-green-700' : '' }}
            {{ $message['level'] === 'danger' ? 'bg-red-100 border-red-400 text-red-700' : '' }}
            {{ $message['level'] === 'warning' ? 'bg-yellow-100 border-yellow-400 text-yellow-700' : '' }}
            px-4 py-3 rounded relative" role="alert">
  <strong class="font-bold">{{ Str::title($message['level']) }} alert!</strong>
  <span class="block sm:inline">{{ $message['message'] }}</span>
</div>
@endforeach

{{ session()->forget('flash_notification') }}
