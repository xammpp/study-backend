<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentCreateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
                'name' => 'required|max:50',
                'nim' => 'required|unique:students|max:10',
                'gender' => 'required',
                'class_id' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'name',
            'nim' => 'nim',
            'gender' => 'gender',
            'clas_id' => 'class'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name Wajib di Isi',
            'nim.required' => 'NIM Wajib di Isi',
            'nim.max' => 'NIM Maksimal :max',
            'gender.required' => 'Gender Wajib di Isi',
            'class_id.required' => 'Class Wajib di Isi',
        ];
    }
}
