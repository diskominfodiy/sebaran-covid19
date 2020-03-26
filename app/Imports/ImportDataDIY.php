<?php

namespace App\Imports;

use App\MasterDataDIY;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use DB;

class ImportDataDIY implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MasterDataDIY([
            'tanggal_input'  => $row['data_input_tanggal'],
            'kode'           => $row['kode'],
            'status'         => $row['status'],
            'umur'           => $row['umur'],
            'jenis_kelamin'      => $row['jenis_kelamin'],
            'kecamatan'      => $row['kecamatan'],
            'kab'            => $row['kabupatenkota'],
            'provinsi'       => $row['provinsi']
        ]);
    }

    public function chunkSize(): int
    {
        return 2000;
    }
}
