<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PajakReminder extends Mailable
{
    use Queueable, SerializesModels;

    public $nama_pemilik;
    public $tanggal_berakhir_pajak;

    /**
     * Create a new message instance.
     *
     * @param array $data
     * @return void
     */
    public function __construct($data)
    {
        $this->nama_pemilik = $data['nama_pemilik'];
        $this->tanggal_berakhir_pajak = $data['tanggal_berakhir_pajak'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Pemberitahuan Pajak Anda Akan Berakhir')
                    ->view('emails.pajakReminder', [
                        'nama_pemilik' => $this->nama_pemilik,
                        'tanggal_berakhir_pajak' => $this->tanggal_berakhir_pajak,
                    ]);
    }
}
