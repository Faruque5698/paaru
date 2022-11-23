<?php

namespace Modules\Members\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
            'name'                  => 'required',
            'email'                 => 'email|unique:members,email',
            'contact_info'          => 'required|unique:members,contact_info',
            'passing_year'          => 'required',
            'photo'                 => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'parru_status'          => 'required',
            'publication_status'    => 'numeric',
        ];
    }
}
