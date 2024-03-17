<?php

namespace App\Livewire\Faq;

use App\Models\Faq;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Create extends Component
{

    #[Rule('required', message: 'Masukkan Nama Pertanyaan')]
    public $nama_pertanyaan;

    //content
    #[Rule('required', message: 'Masukkan jawaban pertanyaan')]
    #[Rule('min:3', message: 'Isi Post Minimal 3 Karakter')]
    public $jawaban;

    public function store()
    {
        $this->validate();

     
        //create post
        Faq::create([
            
            'nama_pertanyaan' => $this->nama_pertanyaan,
            'jawaban' => $this->jawaban,
        ]);

        //flash message
        session()->flash('message', 'Data Berhasil Disimpan.');

        //redirect
        return redirect()->route('faq.index');
    }



    public function render()
    {
        return view('livewire.faq.create');
    }
}
