<?php

namespace App\Http\Livewire\PesertaIso;

use App\Models\PesertaIso;
use Livewire\Component;

class Show extends Component
{
    public $detailPeserta;

    public $standar_sertifikasi, $status_permohonan, $status_sertifiasi, $nama_perusahaan, $alamat_perusahaan, $telepon, $email, $jumlah_karyawan,
        $jumlah_sift, $jumlah_divisi, $ruang_lingkup, $nama_perwakilan, $jabatan, $telepon_perwakilan, $email_perwakilan, $bidang_usaha;
    protected $listeners = ['dataPeserta' => 'showData'];
    public function showData($id)
    {
        $peserta = PesertaIso::find($id);
        $this->standar_sertifikasi = $peserta->standar_sertifikasi;
        $this->status_permohonan = $peserta->status_permohonan;
        $this->status_sertifiasi = $peserta->status_sertifiasi;
        $this->nama_perusahaan = $peserta->nama_perusahaan;
        $this->alamat_perusahaan = $peserta->alamat_perusahaan;
        $this->telepon = $peserta->telepon;
        $this->email = $peserta->email;
        $this->jumlah_karyawan = $peserta->jumlah_karyawan;
        $this->jumlah_sift = $peserta->jumlah_sift;
        $this->jumlah_divisi = $peserta->jumlah_divisi;
        $this->ruang_lingkup = $peserta->ruang_lingkup;
        $this->jabatan = $peserta->jabatan;
        $this->nama_perwakilan = $peserta->nama_perwakilan;
        $this->telepon_perwakilan = $peserta->telepon_perwakilan;
        $this->jabatan = $peserta->jabatan;
        $this->telepon_perwakilan = $peserta->telepon_perwakilan;
        $this->email_perwakilan = $peserta->email_perwakilan;
        $this->bidang_usaha = $peserta->bidang_usaha;
    }

    public function render()
    {
        return view('livewire.peserta-iso.show');
    }
}
