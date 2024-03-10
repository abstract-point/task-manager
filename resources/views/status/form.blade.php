<!-- Name -->
<div>
    <x-input-label for="name" :value="__('interface.task_statuses.form.name')" />
    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $status->name ?? null)" autofocus />
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>
