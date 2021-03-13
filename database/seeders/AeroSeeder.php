<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Aerosol\Aero;
use Illuminate\Support\Str;

class AeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$aero = new Aero;
		$aero->key = Str::uuid();
		$aero->data = "{'fg' => 'test', 'bg' => 'test2'}";

		$aero->save();
    }
}
