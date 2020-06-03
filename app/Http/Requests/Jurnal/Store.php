<?php

namespace App\Http\Requests\Jurnal;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest 
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
			'tanggal' => 'required|date',
			'aktivitas' => 'required|max:40',
			'no_akun' => 'required|max:4',
			'keterangan' => 'required|string',
			'jum_debet' => 'required|max:13',
			'jum_kredit' => 'required|max:13',
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
