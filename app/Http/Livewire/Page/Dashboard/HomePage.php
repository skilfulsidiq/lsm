<?php

namespace App\Http\Livewire\Page\Dashboard;

use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        return view('livewire.page.dashboard.home-page')->extends('layouts.app');
    }
}
