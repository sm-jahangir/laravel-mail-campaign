<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\CustomMail;
use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $message = Campaign::create([
            'greeting' => $request->greeting,
            'title' => $request->title,
            'subject' => $request->subject,
            'message' => $request->message,
            'scheduled_at' => $request->scheduled_at,
            'sended_at' => $request->sended_at,
            'status' => $request->status,
        ]);
        // Mail Sent
        // $users = User::all();
        // foreach ($users as $user)
        // {
        //     Mail::to($user->email)->send(new CustomMail($message));
        // }
        // foreach (['taylor@example.com', 'dries@example.com'] as $recipient) {
        //     Mail::to($recipient)->send(new OrderShipped($order));
        // }

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
