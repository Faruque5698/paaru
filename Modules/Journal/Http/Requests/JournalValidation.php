<?php

namespace Modules\Journal\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class JournalValidation extends FormRequest
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
            'title'         => 'required | min:5',
            'abstract'      => 'required | min:50',
            'authors'       => 'required | min:5',
            'pdf_file'      => 'required | max:20000',
        ];
    }
}
