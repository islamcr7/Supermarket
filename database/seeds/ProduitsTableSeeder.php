<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produits')->insert([
            'titre' => Str::random(10),
            'description' => Str::random(100)
              ]);
    }
}
