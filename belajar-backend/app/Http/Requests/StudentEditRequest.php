<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:5',
            'nim' => 'required|unique:students|max:5',
            'gender' => 'required',
            'class_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Column Name Belum di Isi',
            'name.max' => 'Column Name :max',
            'nim.required' => 'NIM Wajib di Isi',
            'nim.max' => 'NIM Maksimal :max',
            'gender.required' => 'Gender Wajib di Isi',
            'class_id.required' => 'Class Wajib di Isi',
        ];
    }
}
