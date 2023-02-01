<?php

namespace App\Http\Livewire\Page\Auth;

use Livewire\Component;

class ForgotPassword extends Component
{
    public function forgot()
    {
        return redirect()->route('auth.login');
    }
    public function render()
    {
        return view('livewire.page.auth.forgot-password')->extends('layouts.auth');;
    }
}
