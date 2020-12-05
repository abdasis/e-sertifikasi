<?php

namespace App\Http\Livewire\PesertaIso;

use App\Models\PesertaIso;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Psy\CodeCleaner\AssignThisVariablePass;

class Pendaftaran extends Component
{

    public  $standar_sertifikasi,
            $status_permohonan,
            $nama_perusahaan,
            $alamat_perusahaan,
            $telepon, $email,
            $jumlah_karyawan,
            $jumlah_sift,
            $jumlah_divisi,
            $ruang_lingkup,
            $nama_perwakilan,
            $jabatan,
            $telepon_perwakilan,
            $bidang_usaha,
            $email_perwakilan;


    public function store()
    {
        $peserta = new PesertaIso();
        $peserta->standar_sertifikasi = $this->standar_sertifikasi;
        $peserta->status_permohonan = $this->status_permohonan;
        $peserta->nama_perusahaan = $this->nama_perusahaan;
        $peserta->alamat_perusahaan = $this->alamat_perusahaan;
        $peserta->telepon =$this->telepon;
        $peserta->email = $this->email;
        $peserta->jumlah_karyawan = $this->jumlah_karyawan;
        $peserta->jumlah_sift = $this->jumlah_sift;
        $peserta->jumlah_divisi = $this->jumlah_divisi;
        $peserta->ruang_lingkup = $this->ruang_lingkup;
        $peserta->nama_perwakilan = $this->nama_perwakilan;
        $peserta->jabatan = $this->jabatan;
        $peserta->telepon_perwakilan = $this->telepon_perwakilan;
        $peserta->bidang_usaha = $this->bidang_usaha;
        $peserta->email_perwakilan = $this->email_perwakilan;
        $peserta->save();
        if ($peserta) {
            $this->emit('success',['title' => 'Berhasil', 'message' => 'Selamat Pendaftaran Anda Berhasil Tunggu Konfirmasi Selanjutnya']);
            Session::flash('Selamat Pendaftaran Anda Berhasil Tunggu Konfirmasi Selanjutnya');
        }
    }

    public function inputReset()
    {
        $this->standar_sertifikasi = null;
        $this->status_permohonan = null;
        $this->nama_perwakilan = null;
        $this->nama_perusahaan = null;
        $this->alamat_perusahaan = null;
        $this->telepon_perwakilan =null;
        $this->telepon  = null;
        $this->jumlah_karyawan = null;
        $this->jumlah_divisi = null;
        $this->jumlah_sift = null;
        $this->ruang_lingkup = null;
        $this->jabatan = null;
        $this->bidang_usaha  = null;
        $this->email_perwakilan = null;
        $this->email = null;
    }

    public function render()
    {
        return view('livewire.peserta-iso.pendaftaran')->layout('layouts.guest');
    }
}
