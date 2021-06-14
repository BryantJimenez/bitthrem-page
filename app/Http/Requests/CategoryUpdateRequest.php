<?php

namespace App\Http\Requests;

use App\Category;
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
        $help=($this->type=="2") ? true : false;
        $icon=($this->type=="2" && is_null($this->category->icon)) ? true : false;
        return [
            'name.*' => 'required|string|min:2|max:191|'.UniqueTranslationRule::for('categories')->ignore($this->category->slug, 'slug')->where('type', $this->type),
            'type' => 'required|'.Rule::in(['1', '2', '3']),
            'icon' => Rule::requiredIf($icon).'|file|mimetypes:image/*',
            'description.*' => Rule::requiredIf($help).'|string|min:2|max:191'
        ];
    }
}
