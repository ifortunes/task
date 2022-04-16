<?php

namespace App\Http\Requests\Api\v1;

use Illuminate\Foundation\Http\FormRequest;

class ChartUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'data.id' => 'required|integer|numeric',
            'data.data.date' => 'required|string|max:10',
            'data.data.number' => 'required|integer|numeric',
        ];
    }
}
