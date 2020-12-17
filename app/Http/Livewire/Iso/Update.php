<?php

namespace App\Http\Livewire\Iso;

use App\Models\Iso;
use Livewire\Component;
use Illuminate\Support\Str;
class Update extends Component
{
    public $jenis_iso, $diskripsi, $nama;
    public $iso;
    public function mount($slug)
    {
        $iso = Iso::where('slug', $slug)->first();
        $this->jenis_iso = $iso->jenis_iso;
        $this->nama = $iso->nama_iso;
        $this->diskripsi = $iso->diskripsi;
        $this->iso = $iso;
    }
    public function rules()
    {
        return [
            'jenis_iso' => 'required',
            'diskripsi' => 'required'
        ];
    }
    public function update()
    {
        $this->validate();
        $iso = Iso::where('slug', $this->iso->slug)->first();
        $iso->jenis_iso = $this->jenis_iso;
        $iso->nama_iso = $this->nama;
        $iso->diskripsi = $this->diskripsi;
        $iso->slug = Str::slug($this->jenis_iso);
        $iso->save();
        $this->emit('alert', ['title' => 'Berhasil', 'message' => 'Data Berhasil Disimpan', 'type' => 'success']);
    }

    public function render()
    {
        return view('livewire.iso.update');
    }
}
