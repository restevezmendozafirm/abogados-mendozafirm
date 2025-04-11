<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DenunciaMail extends Mailable
{
    use Queueable, SerializesModels;

    public $denuncia;

    public function __construct($denuncia)
    {
        $this->denuncia = $denuncia;
    }

    public function build()
    {
        return $this->from('no-reply@mendozafirm.com')
        ->view('emails.denuncia')
        ->subject('Nueva Denuncia Recibida por colaborador TMLF')
        ->with('denuncia', $this->denuncia);
    }
}
