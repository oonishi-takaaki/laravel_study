<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Flight;
use Illuminate\Support\Facades\DB;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('flights')->insert([ //ここを変えると投入するデータが変わる
        //     'name' => 'takaaki',
        //     'airline' => 'oonishi'
        // ]);
        // Flight::factory()->count(5)->create();
        DB::table('flights')->insert([ //ここを変えると投入するデータが変わる
            'name' => 'takaaki',
            'airline' => 'konishi'
        ]);
    }
}
