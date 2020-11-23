<?php

namespace App\Http\Livewire\Sertifikasi;

use App\Models\Sertifikasi;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.sertifikasi.index', [
            'sertifications' => Sertifikasi::latest()->paginate(15)
        ]);
    }
}
