<?php

namespace Database\Seeders;

use App\Imports\ZipCodesSheetImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class ChihuahuaZipCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::import(new ZipCodesSheetImport, public_path() . '/states/chihuahua.xlsx');
    }
}