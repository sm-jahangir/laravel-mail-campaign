<?php

namespace App\Console\Commands;

use Exception;
use Carbon\Carbon;
use App\Models\Sms;
use App\Models\User;
use Illuminate\Console\Command;

class MessageSend extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'message:send';

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
        $campaigns = Sms::where('status', '=', 'PENDING')->whereDate('scheduled_at', '<=', Carbon::now())->get();
        $users = User::all();

        foreach ($campaigns as $campaign) {
            if ($campaign) {
                $campaign->status = 'SENT';
                $campaign->sended_at = Carbon::now();
                $campaign->save();

                if ($users->count() > 0) {
                    foreach ($users as $user) {
                        try {
                            $basic  = new \Vonage\Client\Credentials\Basic("aa73aa29", "pskvB9yrcIAIdHD9");
                            $client = new \Vonage\Client($basic);
                
                            $response = $client->sms()->send(
                                new \Vonage\SMS\Message\SMS($user->phone, 'Jahangir', $campaign->message)
                            );
                
                            $message = $response->current();
                
                            if ($message->getStatus() == 0) {
                                echo "The message was sent successfully\n";
                            } else {
                                echo "The message failed with status: " . $message->getStatus() . "\n";
                            }
                        } catch (Exception $e) {
                        }

                    }
                }
            }
        }
        return 0;
    }
}
