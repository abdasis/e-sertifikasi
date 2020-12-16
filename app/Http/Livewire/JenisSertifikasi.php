<?php

namespace App\Http\Livewire;

use App\Models\Iso;
use Livewire\Component;

class JenisSertifikasi extends Component
{
    public $slug;
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        return view('livewire.jenis-sertifikasi', [
            'jenisSertifikasi' => Iso::where('slug', $this->slug)->first()
        ])->layout('layouts.guest');
    }
}
