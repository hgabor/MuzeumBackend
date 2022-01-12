<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Statue;

class StatueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Statue::factory(15)->create();
    }
}
