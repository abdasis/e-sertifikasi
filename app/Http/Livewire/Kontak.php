<?php

namespace App\Http\Livewire;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Kontak extends Component
{
    public $nama, $email, $subject, $isi_pesan;

    public function send()
    {
        $details = [
            'nama' => $this->nama,
            'email' => $this->email,
            'subject' => $this->subject,
            'isi_pesan' => $this->isi_pesan
        ];

        Mail::to('info@rmicertification.co.id')->send(new ContactMail($details));

        $this->alert('success', 'Submission successful!');
    }

    public function render()
    {
        return view('livewire.kontak')->layout('layouts.guest');
    }
}
