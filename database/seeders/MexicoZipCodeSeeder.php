<?php

namespace Database\Seeders;

use App\Imports\ZipCodesSheetImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class MexicoZipCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::import(new ZipCodesSheetImport, public_path() . '/states/mexico.xlsx');
    }
}
