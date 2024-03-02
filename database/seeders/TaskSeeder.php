<?php

namespace Database\Seeders;

use App\Models\Label;
use App\Models\Task;
use App\Models\TaskStatus;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::factory(10)->create();
        $statuses = TaskStatus::factory(5)->create();
        $labels = Label::factory(4)->create();
        $tasks = Task::factory(30)->create([
            'status_id' => 1,
            'created_by_id' => 1,
            'assigned_to_id' => 1
        ]);

        foreach ($tasks as $task) {
            $task->creator()->associate($users->random(1)->value('id'));
            $task->assignee()->associate($users->random(1)->value('id'));

            $task->labels()->attach($labels->random(rand(1, 4))->value('id'));
            $task->status()->associate($statuses->random(1)->value('id'));

            $task->save();
        }
    }
}
