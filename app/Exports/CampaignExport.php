<?php

namespace App\Exports;

use App\Models\Campaign;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CampaignExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // $type = DB::table('campaigns')->select('id', 'greeting')->get();
        // return $type;

        return Campaign::all();
    }
    public function headings(): array
    {
        return [
            'id',
            'greeting',
            'title',
            'subject',
            'message',
            'files',
            'scheduled_at',
            'sended_at',
            'status',
            'created_at',
            'updated_at',
        ];
    }
}
