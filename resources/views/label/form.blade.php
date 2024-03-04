<div>
    <x-input-label for="name" :value="__('interface.labels.form.name')" />
    <x-text-input id="name" class="block mt-1 w-1/3" type="text" name="name" :value="old('name', $label->name ?? null)" required autofocus />
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>
<div>
    <x-input-label for="description" :value="__('interface.labels.form.description')" class="mt-4" />
    <x-textarea id="description" class="block mt-1 w-1/3" name="description">
        {{ old('description', $label->description ?? null) }}
    </x-textarea>
    <x-input-error :messages="$errors->get('description')" class="mt-2" />
</div>

