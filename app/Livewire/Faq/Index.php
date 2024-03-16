<?php

namespace App\Livewire\Faq;

use Livewire\Component;
use App\Models\Faq;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.faq.index', [
            'faq' => Faq::latest()->paginate(5)
        ]);
    }
}
