<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Business;
use App\Models\Category;
use App\Models\Employee;
use App\Models\Service;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Skkeed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            \Database\Seeders\CitySeeder::class,
            \Database\Seeders\CountrySeeder::class
        ]);
    }
}
