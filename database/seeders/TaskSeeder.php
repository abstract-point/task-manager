<?php

namespace Database\Seeders;

use App\Models\Label;
use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = Task::factory(10)->create();
        $labels = Label::factory(4)->create();

        foreach ($tasks as $task) {
            $labelsCount = rand(1, 4);
            $task->labels()->attach($labels->random($labelsCount));
        }
    }
}
