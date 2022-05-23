<?php

namespace App\Http\Requests\Admin;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'string|unique:users',
            'role' => 'string',
            'password' => ['required', Password::min(8)],
        ];
    }

    public function validationData()
    {
        $this->request->add([
            'name' => Str::title($this->get('name')),
            'password' => Hash::make($this->get('password')),
        ]);

        return $this->all();
    }
}
