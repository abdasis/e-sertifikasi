<?php

namespace App\Http\Livewire\Sertifikasi;

use App\Models\Sertifikasi;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.sertifikasi.index', [
            'sertifications' => Sertifikasi::latest()->paginate(15)
        ]);
    }
}
