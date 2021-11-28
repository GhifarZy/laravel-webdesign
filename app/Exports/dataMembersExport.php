<?php

namespace App\Exports;

use App\Models\profile;
use Maatwebsite\Excel\Concerns\FromCollection;

class dataMembersExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return profile::all();
    }
}
