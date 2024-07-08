<form action="{{route('tasks.index')}}">

    <!-- Inputs -->
    <div class="flex">
        <div class="mr-4">
            <x-selector-input id="status_id" class="" name="filter[status_id]">
                <option value="">
                    {{ __('interface.tasks.filter.status') }}
                </option>
                @foreach($taskStatuses as $status)
                    <option
                        value="{{ $status->id }}" {{ ($filterData['status_id'] ?? null) == $status->id ? 'selected' : '' }}>
                        {{ $status->name }}
                    </option>
                @endforeach
            </x-selector-input>
            <x-input-error :messages="$errors->get('filter[status_id]')" class="mt-2"/>
        </div>
        <div class="mr-4">
            <x-selector-input id="created_by_id" class="" name="filter[created_by_id]">
                <option value="">
                    {{ __('interface.tasks.filter.author') }}
                </option>
                @foreach($users as $user)
                    <option
                        value="{{ $user->id }}" {{ ($filterData['created_by_id'] ?? null) == $user->id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </x-selector-input>
            <x-input-error :messages="$errors->get('filter[created_by_id]')" class="mt-2"/>
        </div>
        <div class="mr-4">
            <x-selector-input id="assigned_to_id" class="" name="filter[assigned_to_id]">
                <option value="">
                    {{ __('interface.tasks.filter.performer') }}
                </option>
                @foreach($performers as $performer)
                    <option
                        value="{{ $performer->id }}" {{ ($filterData['assigned_to_id'] ?? null) == $performer->id ? 'selected' : '' }}>
                        {{ $performer->name }}
                    </option>
                @endforeach
            </x-selector-input>
            <x-input-error :messages="$errors->get('filter[assigned_to_id]')" class="mt-2"/>
        </div>

        <!-- Button -->
        <div class="flex">
            <x-primary-button class="">
                {{ __('interface.tasks.filter.button') }}
            </x-primary-button>
        </div>
    </div>


</form>
