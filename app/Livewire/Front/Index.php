<?php

namespace App\Livewire\Front;

use Livewire\Component;

class Index extends Component
{
    public $nama_pertanyaan;
    public $jawaban;
    
    public function render()
    {
        return view('livewire.front.index');
    }
}
