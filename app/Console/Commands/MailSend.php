<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\Campaign;
use Illuminate\Support\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class MailSend extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $quotes = [
            'Mahatma Gandhi' => 'Live as if you were to die tomorrow. Learn as if you were to live forever.',
            'Friedrich Nietzsche' => 'That which does not kill us makes us stronger.',
            'Theodore Roosevelt' => 'Do what you can, with what you have, where you are.',
            'Oscar Wilde' => 'Be yourself; everyone else is already taken.',
            'William Shakespeare' => 'This above all: to thine own self be true.',
            'Napoleon Hill' => 'If you cannot do great things, do small things in a great way.',
            'Milton Berle' => 'If opportunity doesn’t knock, build a door.'
        ];
        // Setting up a random word
        $key = array_rand($quotes);
        $data = $quotes[$key];

        // your schedule code
        $schedules = Campaign::where(function ($q) {
            $q->where('status', '=', Campaign::PENDING);
            $q->where('scheduled_at', '<=', Carbon::now());
        })->get();

        $users = User::all();

        foreach ($schedules as $schedule) {
            if ($schedule) {
                $schedule->status = Campaign::SENT;
                $schedule->sended_at = Carbon::now();
                $schedule->save();


                foreach ($users as $user) {
                    Mail::raw("{$key} -> {$data}", function ($mail) use ($user) {
                        $mail->from('samraatjahangir@gmail.com');
                        $mail->to($user->email)
                            ->subject('Daily New Quote!');
                    });
                }


            }
        }





        // $quotes = [
        //     'Mahatma Gandhi' => 'Live as if you were to die tomorrow. Learn as if you were to live forever.',
        //     'Friedrich Nietzsche' => 'That which does not kill us makes us stronger.',
        //     'Theodore Roosevelt' => 'Do what you can, with what you have, where you are.',
        //     'Oscar Wilde' => 'Be yourself; everyone else is already taken.',
        //     'William Shakespeare' => 'This above all: to thine own self be true.',
        //     'Napoleon Hill' => 'If you cannot do great things, do small things in a great way.',
        //     'Milton Berle' => 'If opportunity doesn’t knock, build a door.'
        // ];

        // // Setting up a random word
        // $key = array_rand($quotes);
        // $data = $quotes[$key];

        // $users = User::all();
        // foreach ($users as $user) {
        //     Mail::raw("{$key} -> {$data}", function ($mail) use ($user) {
        //         $mail->from('samraatjahangir@gmail.com');
        //         $mail->to($user->email)
        //             ->subject('Daily New Quote!');
        //     });
        // }

        $this->info('Successfully sent daily quote to everyone.');
    }
}
