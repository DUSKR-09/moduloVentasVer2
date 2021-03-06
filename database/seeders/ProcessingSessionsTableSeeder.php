<?php

namespace Database\Seeders;

use App\Models\ProcessingSession;
use Illuminate\Database\Seeder;

class ProcessingSessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProcessingSession::factory(10)->create();
    }
}
