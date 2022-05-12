<?php

namespace Database\Seeders;

use App\Imports\ZipCodesSheetImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class BajaCaliforniaSurZipCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::import(new ZipCodesSheetImport, public_path() . '/states/baja_california_sur.xlsx');
    }
}
