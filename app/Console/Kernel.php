<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\Mime\Email;
use App\Models\Loanform;
class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function () {
            $info = array(
                'name' => "Test"
            );
            
            Mail::send([], $info, function ($message)
            {
                Excel::store(new MailController, 'users.Xlsx');
                $message->to(['pavan.bogara@apacfin.com'], 'Test')
                    ->subject('Website Enquiry - TEST');
                $message->attach('C:\xampp\htdocs\apac\storage\app\users.xlsx');
                $message->html("<html><h5> Dear Madam,</h5><p>Please find the above attachment for website enquiries.<br/><b>(This is an automated mail, daily once in a day you will receive the data with attached mail and shared data is dummy, kindly ignore the same.)</b></p></html>");
                $message->from('no_reply@apacfin.com');
            });
        })->everyMinute();

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
