<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RelationRequest extends FormRequest
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
            'related' => 'required'
        ];
    }

    public function messages()
	{
		return [
			'related.required' => 'Tell us if you are related to the serviceman/woman'
		];
	}
}
