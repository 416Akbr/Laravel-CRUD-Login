<?php

use Illuminate\Database\Seeder;

class tb_contoh_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tb_contoh_seeder::create([
        	'name' => 'kumle',
        	'email' => 'kumle.com'
        	]);
    }
}
