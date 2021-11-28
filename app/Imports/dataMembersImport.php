<?php

namespace App\Imports;

use App\Models\profile;
use Maatwebsite\Excel\Concerns\ToModel;

class dataMembersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new profile([
            'nama' => $row[1],
            'username' => $row[2],
            'pekerjaan' => $row[3],
            'alamat' => $row[4],
            'gambar' => $row[5],
        ]);
    }
}
