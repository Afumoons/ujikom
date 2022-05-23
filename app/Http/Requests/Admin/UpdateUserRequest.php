<?php

namespace App\Http\Requests\Admin;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'email' => 'string',
            'old_email' => 'string',
            'role' => 'string',
            'password' => ['required', Password::min(8)],
        ];
    }

    public function validationData()
    {
        $user = User::where('email', $this->get('old_email'))->first();
        $this->request->add([
            'name' => Str::title($this->get('name')),
        ]);
        if ($this->get('password') == null) {
            $this->request->add(['password' => $user->password]);
        } else {
            $this->request->add(['password' => Hash::make($this->get('password'))]);
        }
        if ($this->get('old_email') == $user->email) {
            $this->request->add([
                'email' => $user->email,
            ]);
        } else {
            dd('duar');
            $this->validate([
                'email' => 'string|email|unique:users,email',
            ]);
        }

        return $this->all();
    }
}
