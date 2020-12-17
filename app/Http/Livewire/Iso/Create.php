<?php

namespace App\Http\Livewire\Iso;

use App\Models\Iso;
use Livewire\Component;
use Illuminate\Support\Str;
class Create extends Component
{

    public $jenis_iso, $diskripsi, $nama;
    public function rules()
    {
        return [
            'jenis_iso' => 'required',
            'diskripsi' => 'required',
            'nama' => 'required'
        ];
    }
    public function store()
    {
        $iso = new Iso();
        $iso->jenis_iso = $this->jenis_iso;
        $iso->nama_iso = $this->nama;
        $iso->diskripsi = $this->diskripsi;
        $iso->slug = Str::slug($this->jenis_iso);
        $iso->save();
        $this->emit('alert', ['title' => 'Berhasil', 'message' => 'Data Berhasil Disimpan', 'type' => 'success']);
    }
    public function render()
    {
        return view('livewire.iso.create');
    }
}
