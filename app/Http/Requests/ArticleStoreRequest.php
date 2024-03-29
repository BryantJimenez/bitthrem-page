<?php

namespace App\Http\Requests;

use App\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ArticleStoreRequest extends FormRequest
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
            'image' => 'required|file|mimetypes:image/*',
            'title.*' => 'required|string|min:2|max:191|unique_translation:articles,title',
            'content.*' => 'required|string|min:2|max:65000',
            'keywords.*' => 'required|string|min:2|max:191',
            'category_id' => 'required|'.Rule::in($categories),
            'state' => 'required|'.Rule::in(['0', '1'])
        ];
    }
}
