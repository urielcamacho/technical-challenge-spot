<?php

namespace Database\Seeders;

use App\Imports\ZipCodesSheetImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class TamaulipasZipCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::import(new ZipCodesSheetImport, public_path() . '/states/tamaulipas.xlsx');
    }
}
