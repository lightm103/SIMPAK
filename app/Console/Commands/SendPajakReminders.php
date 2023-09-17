<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Pajak;
use App\Mail\PajakReminder;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class SendPajakReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-pajak-reminders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
{
    $today = Carbon::today();
    $nextMonth = Carbon::today()->addMonth();

    $pajaks = Pajak::whereBetween('tanggal_berakhir_pajak', [$today, $nextMonth])->get();

    foreach ($pajaks as $pajak) {
        Mail::to($pajak->email_pemilik)->send(new PajakReminder([
            'nama_pemilik' => $pajak->nama_pemilik,
            'tanggal_berakhir_pajak' => $pajak->tanggal_berakhir_pajak->format('d-m-Y')
        ]));
    }
}
}
