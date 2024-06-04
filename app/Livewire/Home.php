<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Attributes\Title;

class Home extends Component
{
    #[Layout('layouts.app')]
    #[Title('Home')]
    public function render()
    {
        return view('livewire.home');
    }
}
