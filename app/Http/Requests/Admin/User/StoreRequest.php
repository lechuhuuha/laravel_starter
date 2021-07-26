<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        // dd('required|in:' . implode(',', config('common.user.role')));
        return [
            //
            'name' => 'required|max:100',
            'password' => 'required|min:8|max:100',
            'email' => 'required|email|unique:users,email',
            'address' => 'required',
            'role' => 'required|in:' . implode(',', config('common.user.role')),
            'gender' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.max' => 'Ho ten ko dc vuot qua 100 ky tu',
            'email.email' => 'Sai dinh dang email',
            'email.unique' => 'Email da ton tai',
            'required' => ':attribute ko dc de trong'
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Ho ten',
            'email' => 'Email',
            'password' => 'Mat khau',
            'address' => 'Dia chi',
            'role' => 'Tai khoan',
            'gender' => 'Gioi tinh'
        ];
    }
}
