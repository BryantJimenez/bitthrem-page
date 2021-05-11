<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use CodeZero\UniqueTranslation\UniqueTranslationRule;

class ArticleUpdateRequest extends FormRequest
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
            'image' => 'nullable|file|mimetypes:image/*',
            'title.*' => 'required|string|min:2|max:191|'.UniqueTranslationRule::for('articles')->ignore($this->article->slug, 'slug'),
            'content.*' => 'required|string|min:2|max:65000'
        ];
    }
}
