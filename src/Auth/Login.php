<?php

namespace Squarenetmedia\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $login, $password;

    public function login()
    {
        $this->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        $fieldType = filter_var($this->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (Auth::attempt([$fieldType => $this->login, 'password' => $this->password])) {
            return redirect()->intended('dashboard');
        }

        session()->flash('error', 'Invalid credentials');
    }

    public function render()
    {
        return view('auth::login');
    }
}
