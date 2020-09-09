<?php

use Illuminate\Database\Seeder;

class ActicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Acticle::class, 5)->create();
    }
}
