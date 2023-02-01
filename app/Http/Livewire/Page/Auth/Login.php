<?php

namespace App\Http\Livewire\Page\Auth;

use Livewire\Component;

class Login extends Component
{

    public function login(){
        return redirect()->route('home');
    }
    public function render()
    {
        return view('livewire.page.auth.login')->extends('layouts.auth');
    }
}
