<?php

namespace App\Http\Livewire\Sertifikasi;

use App\Models\Sertifikasi;
use Livewire\Component;

class Update extends Component
{
    public $perusahaan, $id_sertifikasi, $alamat, $standard, $submit, $surveilance_1, $surveilance_2, $date_expired;

    public $sertifikasi_id;
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
    public function mount($id)
    {
        $sertification = Sertifikasi::find($id);
        $this->perusahaan = $sertification->perusahaan;
        $this->id_sertifikasi = $sertification->id_sertifikasi;
        $this->alamat = $sertification->alamat;
        $this->standard = $sertification->standard;
        $this->submit = $sertification->submit;
        $this->surveilance_1 = $sertification->surveilance_1;
        $this->surveilance_2 = $sertification->surveilance_2;
        $this->date_expired = $sertification->expired;
        $this->sertifikasi_id = $sertification->id;
    }

    public function update()
    {
        $this->validate();
        $sertifikasi = Sertifikasi::find($this->sertifikasi_id);
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
        return view('livewire.sertifikasi.update');
    }
}
