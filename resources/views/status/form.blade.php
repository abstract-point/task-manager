<!-- Name -->
<div>
    <x-input-label for="name" :value="__('Имя')" />
    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $status->name ?? null)" required autofocus />
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>
