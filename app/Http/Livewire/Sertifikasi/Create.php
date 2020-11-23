<?php

namespace App\Http\Livewire\Sertifikasi;

use App\Models\Sertifikasi;
use Livewire\Component;

class Create extends Component
{
    public $perusahaan, $id_sertifikasi, $alamat, $standard, $submit, $surveilance_1, $surveilance_2, $date_expired;

    public function rules()
    {
        return [
            'perusahaan' => 'required',
            'id_sertifikasi' => 'required',
            'alamat' => 'required',
            'standard' => 'required',
            'submit' => 'required',
            'surveilance_1' => 'required',
            'surveilance_2' => 'required',
            'date_expired' => 'required',
        ];
    }

    public function store()
    {
        $this->validate();
        $sertifikasi = new Sertifikasi();
        $sertifikasi->perusahaan = $this->perusahaan;
        $sertifikasi->id_sertifikasi = $this->id_sertifikasi;
        $sertifikasi->alamat = $this->alamat;
        $sertifikasi->standard = $this->standard;
        $sertifikasi->submit = $this->submit;
        $sertifikasi->surveilance_1 = $this->surveilance_1;
        $sertifikasi->surveilance_2 = $this->surveilance_2;
        $sertifikasi->expired = $this->date_expired;
        $sertifikasi->save();
        if ($sertifikasi) {
            $this->emit('success', ['title' => 'Berhasil', 'message' => "Data Sertifikasi dengan ID {$sertifikasi->id} Berhasil Disimpan"]);
        }
    }
    public function render()
    {
        return view('livewire.sertifikasi.create');
    }
}
