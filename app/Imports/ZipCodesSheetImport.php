<?php

namespace App\Imports;

use App\Models\Settlement;
use App\Models\State;
use App\Models\ZipCode;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class ZipCodesSheetImport implements ToCollection, WithBatchInserts, WithChunkReading
{
    /**
    * @param Collection $rows
    *
    * @return void
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $state = State::firstOrCreate([
                'key' => $row[7],
                'name' => $row[4],
            ]);

            $settlement = Settlement::firstOrCreate([
                'name' => $row[1],
                'zone' => $row[13],
                'settlement_type' => $row[2],
            ]);

            $zipCode = ZipCode::firstOrCreate([
                'zip_code' => $row[0],
                'city' => $row[5] ?? '',
                'state_id' => $state->id,
                'municipality' => $row[3],
            ]);

            $zipCode->settlements()->attach($settlement);
        }
    }

    public function batchSize(): int
    {
        return 1000;
    }

    public function chunkSize(): int
    {
        return 1000;
    }
}
