<?php

namespace App\Http\Livewire\PesertaIso;

use App\Models\PesertaIso;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $dataPeserta = PesertaIso::latest()->get();
        return view('livewire.peserta-iso.index', [
            'dataPeserta' => $dataPeserta
        ]);
    }
}
