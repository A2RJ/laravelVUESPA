<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JurnalRequest extends FormRequest 
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
			'aktivitas' => 'required|max:50',
			'no_akun' => 'required|max:5',
			'keterangan' => 'required|string',
			'jum_debet' => 'required|max:32',
			'jum_kredit' => 'required|max:32',
			'tgl' => 'required|date',
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
     
        ];
    }

}
