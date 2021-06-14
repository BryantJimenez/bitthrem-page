<?php

namespace App\Http\Requests;

use App\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use CodeZero\UniqueTranslation\UniqueTranslationRule;

class HelpUpdateRequest extends FormRequest
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
        $categories=Category::where('state', '1')->get()->pluck('slug');
        return [
            'title.*' => 'required|string|min:2|max:191|'.UniqueTranslationRule::for('articles')->ignore($this->help->slug, 'slug'),
            'content.*' => 'required|string|min:2|max:65000',
            'category_id' => 'required|'.Rule::in($categories),
            'state' => 'required|'.Rule::in(['0', '1'])
        ];
    }
}
