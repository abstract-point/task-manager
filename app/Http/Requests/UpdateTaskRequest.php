<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTaskRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100', 'min:3',
                Rule::unique('tasks', 'name')->ignore($this->task)
            ],
            'description' => ['nullable', 'string', 'max:255'],
            'status_id' => ['required', 'integer'],
            'assigned_to_id' => 'nullable|integer',
            'labels' => 'array',
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'Задача с таким именем уже существует',
            'name.required' => 'Это обязательное поле',
            'status_id.required' => 'Это обязательное поле',
        ];
    }
}
