<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\CustomMail;
use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Exception;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campaigns = Campaign::all();
        return view('campaign-table', compact('campaigns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function smsSent()
    {
        try {
            $basic  = new \Vonage\Client\Credentials\Basic("aa73aa29", "pskvB9yrcIAIdHD9");
            $client = new \Vonage\Client($basic);

            $response = $client->sms()->send(
                new \Vonage\SMS\Message\SMS("8801571258216", 'Jahangir', 'A text message sent using the Nexmo SMS API')
            );

            $message = $response->current();

            if ($message->getStatus() == 0) {
                echo "The message was sent successfully\n";
            } else {
                echo "The message failed with status: " . $message->getStatus() . "\n";
            }

            dd('SMS Sent Successfully.');
        } catch (Exception $e) {
            dd("Error: " . $e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $campaign = Campaign::create([
            'greeting' => $request->greeting,
            'title' => $request->title,
            'subject' => $request->subject,
            'message' => $request->message,
            'scheduled_at' => $request->scheduled_at,
            'status' => $request->status,
        ]);

        if ($request->hasFile('files')) {
            $image = $request->file('files');
            $ext = $image->extension();
            $file = time() . '.' . $ext;
            $image->storeAs('public/campaign', $file); //above 4 line process the image code
            $campaign->files =  $file; //ai code ta image ke insert kore
            $campaign->save();
        }

        return redirect()->route('campaign.index');
    }
    public function stop($id)
    {
        $campaign = Campaign::findOrFail($id);
        $campaign->update([
            'status' => 'PAUSE',
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function show(Campaign $campaign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaign $campaign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campaign $campaign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $campaign)
    {
        //
    }
}
