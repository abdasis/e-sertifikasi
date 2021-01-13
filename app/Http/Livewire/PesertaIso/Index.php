<?php

namespace App\Http\Livewire\PesertaIso;

use App\Models\PesertaIso;
use League\CommonMark\Block\Element\ThematicBreak;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $peserta_id;
    public $statusModal  = false;


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
        $this->peserta_id = $id;
    }

    public function cancelled()
    {
        $this->alert('info', 'Data tidak jadi dihapus');
    }

    public function confirmed()
    {
        $sertifikasi = PesertaIso::find($this->peserta_id);
        $sertifikasi->delete();
        $this->alert('success', 'Data berhasil dihapus');
    }

    public function show($id)
    {
        $this->statusModal  = true;
        $this->emit('dataPeserta', $id);
        $this->emit('modalPeserta');
    }
    public function render()
    {
        $dataPeserta = PesertaIso::latest()->paginate(10);
        return view('livewire.peserta-iso.index', [
            'dataPeserta' => $dataPeserta
        ]);
    }
}
