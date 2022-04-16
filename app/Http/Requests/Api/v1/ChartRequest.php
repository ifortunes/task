<?php

namespace App\Http\Requests\Api\v1;

use Illuminate\Foundation\Http\FormRequest;

class ChartRequest extends FormRequest
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
            'data.date' => 'required|string|max:10',
            'data.number' => 'required|max:4',
        ];
    }
}
