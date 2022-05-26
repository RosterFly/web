<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AirportsSeeder extends Seeder
{
    public function run()
    {
        $sql = file_get_contents(database_path() . '/seeders/sql_scripts/airports_seeder.sql');
        DB::statement($sql);

        $sql = file_get_contents(database_path() . '/seeders/sql_scripts/airports_seeder1.sql');
        DB::statement($sql);

        $sql = file_get_contents(database_path() . '/seeders/sql_scripts/airports_seeder2.sql');
        DB::statement($sql);

        $sql = file_get_contents(database_path() . '/seeders/sql_scripts/airports_seeder3.sql');
        DB::statement($sql);

        $sql = file_get_contents(database_path() . '/seeders/sql_scripts/airports_seeder4.sql');
        DB::statement($sql);

        $sql = file_get_contents(database_path() . '/seeders/sql_scripts/airports_seeder5.sql');
        DB::statement($sql);
    }
}
