<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{

    public function rules(): array
    {
        return [
          'title' => ['required'],
          'description' => ['required'],
          'status' => ['required'],
          'deadline' => ['required', 'date'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    public function messages()
    {
        return [
          'title.required' => 'The title field is required.',
          'description.required' => 'The description field is required.',
          'status.required' => 'The status field is required.',
          'deadline.required' => 'The deadline field is required.',
        ];
    }

}
