<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditCafeRequest extends FormRequest
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
          'company_name'            => 'required',
          'address'                 => 'required',
          'city'                    => 'required',
          'state'                   => 'required',
          'zip'                     => 'required',
          'website'                 => 'sometimes|url'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
          'company_name.required'     => 'A name for the cafe is required.',
          'address'                   => [ 'required' => 'The location needs to have an address.' ],
          'city'                      => [ 'required' => 'The location needs to have a city.' ],
          'state'                     => [ 'required' => 'The location needs to have a state.' ],
          'zip'                       => [
                                            'required' => 'The location needs to have a zip.'
                                         ],
          'website.url'               => 'The website must be a proper URL.'
        ];
    }
}
