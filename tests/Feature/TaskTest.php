<?php


use App\Models\Task;
use App\Models\TaskStatus;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * A basic feature test example.
     */
    public function testIndex(): void
    {
        $this->get(route('tasks.index'))
            ->assertStatus(200);
    }

    public function testCreateAuthed(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->get(route('tasks.create'))
            ->assertStatus(200);
    }

    public function testCreateNotAuthed(): void
    {
        $this->get(route('tasks.create'))
            ->assertRedirectToRoute('login');
    }

    public function testEditAuthed(): void
    {
        $user = User::factory()->create();
        $task = Task::factory()->create();

        $this->actingAs($user)
            ->get(route('tasks.edit', [$task]))
            ->assertStatus(200);
    }

    public function testEditNotAuthed(): void
    {
        $task = Task::factory()->create();

        $this->get(route('tasks.edit', [$task]))
            ->assertRedirectToRoute('login');
    }

    public function testStoreAuthed(): void
    {
        $user = User::factory()->create();
        $task = Task::factory()->make()->only('name', 'description', 'status_id', 'created_by_id', 'assigned_to_id');

        $this->actingAs($user)
            ->post(route('tasks.store'), $task)
            ->assertRedirectToRoute('tasks.index')
            ->assertSessionHasNoErrors();

        $this->assertDatabaseHas('tasks', $task);
    }

    public function testStoreNotAuthed(): void
    {
        $task = Task::factory()->make()->only('name');

        $this->post(route('tasks.store'), $task)
            ->assertRedirectToRoute('login');
    }

    public function testUpdateAuthed(): void
    {
        $user = User::factory()->create();
        $task = Task::factory()->create();
        $updatedTask = Task::factory()->make()->only('name', 'description', 'status_id', 'created_by_id');

        $this->actingAs($user)
            ->patch(route('tasks.update', [$task]), $updatedTask)
            ->assertRedirectToRoute('tasks.index');

        $this->assertDatabaseHas('tasks', $updatedTask);
    }

    public function testUpdateNotAuthed(): void
    {
        $task = Task::factory()->create();

        $this->patch(route('tasks.update', [$task]))
            ->assertRedirectToRoute('login');
    }

    public function testDestroyAuthedCreator(): void
    {
        $user = User::factory()->create();

        $task = Task::factory()->make();
        $task->creator()->associate($user);
        $task->save();

        $this->actingAs($user)
            ->delete(route('tasks.destroy', [$task]))
            ->assertRedirectToRoute('tasks.index');

        $this->assertDatabaseMissing('tasks', $task->only('id'));
    }

    public function testDestroyNotAuthed(): void
    {
        $task = Task::factory()->create();

        $this->delete(route('tasks.destroy', [$task]))
            ->assertRedirectToRoute('login');
    }

    public function testDestroyNotCreator(): void
    {
        $user = User::factory()->create();
        $task = Task::factory()->create();

        $this->actingAs($user)
            ->delete(route('tasks.destroy', [$task]))
            ->assertRedirectToRoute('tasks.index');

        $this->assertDatabaseHas('tasks', $task->only('id'));
    }
}
