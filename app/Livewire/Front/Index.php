<?php

namespace App\Livewire\Front;

use Livewire\Component;
use App\Models\Faq;
use Livewire\Attributes\Url;

class Index extends Component
{
    public $nama_pertanyaan;
    public $faq;

    
    public $search = '';

    public function render()
    {
        $this->faq = Faq::where('nama_pertanyaan', 'like', '%'.$this->search.'%')->get();
        return view('livewire.front.index');

    
        // return view('livewire.front.index', [
        //     'faq' => Faq::where('nama_pertanyaan', 'like', '%'.$this->queryString.'%')->get(),
        // ]);
    }
}
