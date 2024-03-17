<?php

namespace App\Livewire\Front;

use Livewire\Component;
use App\Models\Faq;

class Index extends Component
{
    public $nama_pertanyaan;
    public $jawaban;

    public function render()
    {
        return view('livewire.front.index', [
            'faq' => Faq::latest()->paginate(10)
        ]);
    }
}
