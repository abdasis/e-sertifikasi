<?php

namespace App\Http\Livewire\Iso;

use App\Models\Iso;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.iso.index', [
            'Isos' => Iso::latest()->get()
        ]);
    }
}
