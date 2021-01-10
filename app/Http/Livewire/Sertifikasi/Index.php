<?php

namespace App\Http\Livewire\Sertifikasi;

use App\Models\Sertifikasi;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $sertifikasi_id;
    protected $listeners = [
        'confirmed',
        'cancelled',
    ];

    public function delete($id)
    {
        $this->confirm('Apakah yakin untuk menghapus data ini?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => 'Tidak',
            'onConfirmed' => 'confirmed',
            'onCancelled' => 'cancelled'
        ]);
        $this->sertifikasi_id = $id;
    }

    public function cancelled()
    {
        $this->alert('info', 'Data tidak jadi dihapus');
    }

    public function confirmed()
    {
        $sertifikasi = Sertifikasi::find($this->sertifikasi_id);
        $sertifikasi->delete();
        $this->alert('success', 'Data berhasil dihapus');
    }
    public function render()
    {
        return view('livewire.sertifikasi.index', [
            'sertifications' => Sertifikasi::latest()->paginate(15)
        ]);
    }
}
