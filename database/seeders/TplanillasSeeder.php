<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Illuminate\Database\Seeder;
use JeroenZwart\CsvSeeder\CsvSeeder;
use DB;

class TplanillasSeeder extends CsvSeeder
{
    public function __construct(){
        $this->file = '/database/seeders/csv/tplanillas.csv';
		$this->encode = false;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Recommended when importing larger CSVs
	    DB::disableQueryLog();
	    parent::run();

    }
}
