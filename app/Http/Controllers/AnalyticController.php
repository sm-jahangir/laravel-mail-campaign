<?php

namespace App\Http\Controllers;

use App\Models\Analytic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnalyticController extends Controller
{
    public function create()
    {
        $posts = DB::table('analytics')
            ->where('id', 1)
            ->first();
        return view('analytic.form', compact('posts'));
    }
    public function store(Request $request)
    {
        $data = Analytic::find(1);
        $data->code = $request->code;
        $data->save();

        return back();
    }
}
