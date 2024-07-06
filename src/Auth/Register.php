<?php

namespace Squarenetmedia\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class Register extends Component
{
    public $name, $email, $username, $dob, $password, $password_confirmation;

    public function register()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'dob' => 'required|date',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'username' => $this->username,
            'dob' => $this->dob,
            'password' => Hash::make($this->password),
        ]);

        return redirect()->route('login');
    }

    public function render()
    {
        return view('auth::register');
    }
}
