<?php
namespace App\Http\Requests\Category;
use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    public function authorize():bool
    {
        return true;
    }

    public function rules():array
    {
        return [

        ];
    }
    public function messages():array
    {
        return [

        ];
    }
}
