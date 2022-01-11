<?php

namespace Database\Seeders;

use App\Models\Painting;
use Illuminate\Database\Seeder;

class PaintingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Painting::factory(10)->create();
    }
}
