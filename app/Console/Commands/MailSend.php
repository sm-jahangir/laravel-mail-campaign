<?php

namespace App\Console\Commands;

use App\Mail\CampaignMail;
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

        // your schedule code
        // $campaigns = Campaign::where(function ($q) {
        //     $q->where('status', '=', 'PENDING');
        //     $q->where('scheduled_at', '<=', Carbon::now());
        // })->get();
        $campaigns = Campaign::where('status', '=', 'PENDING')->whereDate('scheduled_at','<=', Carbon::now())->get();
        $users = User::all();

        foreach ($campaigns as $campaign) {
            if ($campaign) {
                $campaign->status = 'SENT';
                $campaign->sended_at = Carbon::now();
                $campaign->save();

                if ($users->count() > 0) {
                    foreach ($users as $user) {
                        Mail::to($user->email)
                        ->cc(['jahang1ir@gmail.com','jahangir12@gmail.com','jahangir1f2@gmail.com'])
                        ->bcc(['jahang1ir@gmail.com','jahangir12@gmail.com','jahangir1f2@gmail.com'])
                        ->send(new CampaignMail($campaign));
                    }
                }
            }
        }

        $this->info('Successfully sent daily quote to everyone.');
    }
}
