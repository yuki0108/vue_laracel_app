<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Task;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::factory()->count(50)->create();
    }
}