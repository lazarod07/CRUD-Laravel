<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'categories',
            'products',
        ]);

        $this->call(CategoryTableSeeder::class);
        $this->call(ProductTableSeeder::class);
    }

    public function truncateTables(array $tables){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach($tables as $table){
            DB::table($table)->truncate();
            // DB::table($table)->delete();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
