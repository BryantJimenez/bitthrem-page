<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use CodeZero\UniqueTranslation\UniqueTranslationRule;

class CategoryUpdateRequest extends FormRequest
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
            'name.*' => 'required|string|min:2|max:191|'.UniqueTranslationRule::for('categories')->ignore($this->category->slug, 'slug')->where('type', $this->type),
            'type' => 'required|'.Rule::in(['1', '2', '3'])
        ];
    }
}
