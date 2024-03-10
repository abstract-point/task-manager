<?php

namespace App\Http\Requests;

use App\Models\TaskStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TaskStatusRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required', 'string', 'max:30', 'min:3',
                Rule::unique('task_statuses', 'name')->ignore($this->task_status)
            ],
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'Статус с таким именем уже существует',
        ];
    }
}
