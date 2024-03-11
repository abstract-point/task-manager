<?php

namespace Tests\Feature;

use App\Models\Label;
use App\Models\Task;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LabelTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function testIndex(): void
    {
        $this->get(route('labels.index'))
            ->assertStatus(200);
    }

    public function testCreateAuthed(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->get(route('labels.create'))
            ->assertStatus(200);
    }

    public function testCreateNotAuthed(): void
    {
        $this->get(route('labels.create'))
            ->assertRedirectToRoute('login');
    }

    public function testEditAuthed(): void
    {
        $user = User::factory()->create();
        $label = Label::factory()->create();

        $this->actingAs($user)
            ->get(route('labels.edit', [$label]))
            ->assertStatus(200);
    }

    public function testEditNotAuthed(): void
    {
        $label = Label::factory()->create();

        $this->get(route('labels.edit', [$label]))
            ->assertRedirectToRoute('login');
    }

    public function testStoreAuthed(): void
    {
        $user = User::factory()->create();
        $label = Label::factory()->make()->only('name');

        $this->actingAs($user)
            ->post(route('labels.store'), $label)
            ->assertRedirectToRoute('labels.index')
            ->assertSessionHasNoErrors();

        $this->assertDatabaseHas('labels', $label);
    }

    public function testStoreNotAuthed(): void
    {
        $label = Label::factory()->make()->only('name');

        $this->post(route('labels.store'), $label)
            ->assertRedirectToRoute('login');
    }

    public function testUpdateAuthed(): void
    {
        $user = User::factory()->create();
        $label = Label::factory()->create();
        $updatedLabel = Label::factory()->make()->only('name');

        $this->actingAs($user)
            ->patch(route('labels.update', [$label]), $updatedLabel)
            ->assertRedirectToRoute('labels.index');

        $this->assertDatabaseHas('labels', $updatedLabel);
    }

    public function testUpdateNotAuthed(): void
    {
        $label = Label::factory()->create();

        $this->patch(route('labels.update', [$label]))
            ->assertRedirectToRoute('login');
    }

    public function testDestroyAuthed(): void
    {
        $user = User::factory()->create();
        $label = Label::factory()->create();

        $this->actingAs($user)
            ->delete(route('labels.destroy', [$label]))
            ->assertRedirectToRoute('labels.index');

        $this->assertDatabaseMissing('labels', $label->only('id'));
    }

    public function testDestroyNotAuthed(): void
    {
        $label = Label::factory()->create();

        $this->delete(route('labels.destroy', [$label]))
            ->assertRedirectToRoute('login');
    }

    public function testDestroyLabelWithTask(): void
    {
        $user = User::factory()->create();
        $task = Task::factory()->create();
        $label = Label::factory()->create();
        $task->labels()->attach($label);

        $this->actingAs($user)
            ->delete(route('labels.destroy', [$label]))
            ->assertRedirectToRoute('labels.index');

        $this->assertDatabaseHas('labels', $label->only('id'));
    }
}
