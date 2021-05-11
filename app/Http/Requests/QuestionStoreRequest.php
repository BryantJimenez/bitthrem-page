<?php

namespace App\Http\Requests;

use App\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class QuestionStoreRequest extends FormRequest
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
            'question.*' => 'required|string|min:2|max:191',
            'answer.*' => 'required|string|min:2|max:1000',
            'category_id' => 'required|'.Rule::in($categories)
        ];
    }
}
