<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Attributes\Title;

class Services extends Component
{
    #[Layout('layouts.app')]
    #[Title('Services')]
    public function render()
    {
        return view('livewire.services');
    }
}
