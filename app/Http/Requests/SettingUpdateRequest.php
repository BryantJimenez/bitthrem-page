<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingUpdateRequest extends FormRequest
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
            'phone' => 'required|string|min:5|max:20',
            'email' => 'required|string|email|max:191',
            'address' => 'required|string|min:2|max:191',
            'facebook' => 'nullable|string|min:2|max:191',
            'twitter' => 'nullable|string|min:2|max:191',
            'instagram' => 'nullable|string|min:2|max:191'
        ];
    }
}
