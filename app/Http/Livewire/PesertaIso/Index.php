<?php

namespace App\Http\Livewire\PesertaIso;

use App\Models\PesertaIso;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public function render()
    {
        $dataPeserta = PesertaIso::latest()->paginate(10);
        return view('livewire.peserta-iso.index', [
            'dataPeserta' => $dataPeserta
        ]);
    }
}
