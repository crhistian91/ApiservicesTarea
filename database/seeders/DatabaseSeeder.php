<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tarea;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        Tarea::factory()->times(30)->create();
    }
}
