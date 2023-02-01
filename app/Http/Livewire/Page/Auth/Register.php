<?php

namespace App\Http\Livewire\Page\Auth;

use Livewire\Component;

class Register extends Component
{
    public function register()
    {
        return redirect()->route('home');
    }
    public function render()
    {
        return view('livewire.page.auth.register')->extends('layouts.auth');
    }
}
