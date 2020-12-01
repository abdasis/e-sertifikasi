<?php

namespace App\Http\Livewire;

use App\Models\Sertifikasi;
use Livewire\Component;

class ValidasiSertifikasi extends Component
{
    public $nama_perusahaan, $certificate_number;
    public $getSertifikat;
    public function validasiSertifikasi()
    {
        $this->getSertifikat = Sertifikasi::where('perusahaan', $this->nama_perusahaan)->where('id_sertifikasi', $this->certificate_number)->first();
    }
    public function render()
    {
        return view('livewire.validasi-sertifikasi', [
            'sertifikat' => $this->getSertifikat,
        ])->layout('layouts.guest');
    }
}
