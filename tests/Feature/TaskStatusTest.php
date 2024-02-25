<?php

namespace Tests\Feature;

use App\Models\TaskStatus;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\TestCase;

class TaskStatusTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * A basic feature test example.
     */
    public function testIndex(): void
    {
        $this->get(route('task_statuses.index'))
            ->assertStatus(200);
    }

    public function testCreateAuthed(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->get(route('task_statuses.create'))
            ->assertStatus(200);
    }

    public function testCreateNotAuthed(): void
    {
        $this->get(route('task_statuses.create'))
            ->assertRedirectToRoute('login');
    }

    public function testEditAuthed(): void
    {
        $user = User::factory()->create();
        $taskStatus = TaskStatus::factory()->create();

        $this->actingAs($user)
            ->get(route('task_statuses.edit', [$taskStatus]))
            ->assertStatus(200);
    }

    public function testEditNotAuthed(): void
    {
        $taskStatus = TaskStatus::factory()->create();

        $this->get(route('task_statuses.edit', [$taskStatus]))
            ->assertRedirectToRoute('login');
    }

    public function testStoreAuthed(): void
    {
        $user = User::factory()->create();
        $taskStatus = TaskStatus::factory()->make()->only('name');

        $this->actingAs($user)
            ->post(route('task_statuses.store'), $taskStatus)
            ->assertRedirectToRoute('task_statuses.index')
            ->assertSessionHasNoErrors();

        $this->assertDatabaseHas('task_statuses', $taskStatus);
    }

    public function testStoreNotAuthed(): void
    {
        $taskStatus = TaskStatus::factory()->make()->only('name');

        $this->post(route('task_statuses.store'), $taskStatus)
            ->assertRedirectToRoute('login');
    }

    public function testUpdateAuthed(): void
    {
        $user = User::factory()->create();
        $taskStatus = TaskStatus::factory()->create();
        $updatedTaskStatus = TaskStatus::factory()->make()->only('name');

        $this->actingAs($user)
            ->patch(route('task_statuses.update', [$taskStatus]), $updatedTaskStatus)
            ->assertRedirectToRoute('task_statuses.index');

        $this->assertDatabaseHas('task_statuses', $updatedTaskStatus);
    }

    public function testUpdateNotAuthed(): void
    {
        $taskStatus = TaskStatus::factory()->create();

        $this->patch(route('task_statuses.update', [$taskStatus]))
            ->assertRedirectToRoute('login');
    }

    public function testDestroyAuthed(): void
    {
        $user = User::factory()->create();
        $taskStatus = TaskStatus::factory()->create();

        $this->actingAs($user)
            ->delete(route('task_statuses.destroy', [$taskStatus]))
            ->assertRedirectToRoute('task_statuses.index');

        $this->assertDatabaseMissing('task_statuses', $taskStatus->only('id'));
    }

    public function testDestroyNotAuthed(): void
    {
        $taskStatus = TaskStatus::factory()->create();

        $this->delete(route('task_statuses.destroy', [$taskStatus]))
            ->assertRedirectToRoute('login');
    }
}
