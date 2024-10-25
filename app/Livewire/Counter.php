<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter;

    public function mount(): void
    {
        $this->counter = 0;
    }

    public function increment(): void
    {
        $this->counter++;
    }

    public function decrement(): void
    {
        $this->counter--;
    }
}
