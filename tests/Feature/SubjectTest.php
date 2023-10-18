<?php

namespace Tests\Feature;

use App\Http\Controllers\SubjectController;
use App\Models\Course;
use App\Models\Subject;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class SubjectTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
    }

    public function test_check_if_subject_route_exists(): void
    {
        $response = $this->get('/api/subject');
        $response->assertOk();

    }

    public function test_check_if_subject_controller_exists()
    {
        $this->assertTrue(class_exists(SubjectController::class));
    }

    public function test_check_if_subject_model_exists()
    {
        $this->assertTrue(class_exists(Subject::class));
    }

    public function test_check_if_subject_migration_exists()
    {
        $this->artisan('migrate');
        $this->assertTrue(Schema::hasTable('subjects'));
    }

    public function testIndexSubject()
    {
        $response = $this->get('/api/subject');
        $response->assertOk();
    }

    public function testFetchAllSubjects()
    {
        Subject::factory()->count(5)->create();

        $response = $this->get('/api/subject');

        $response->assertOk();
        $response->assertJsonCount(5);

    }

    public function testFetchSingleSubject()
    {
        $subject = $this->createSubject();

        $response = $this->get("/api/subject/{$subject->id}");

        $response->assertOk();
        $response->assertJson(['id' => $subject->id]);
    }



    public function testStoreSubject()
    {
        $response = $this->post('/api/subject', [
            'name' => 'New Subject Name',
        ]);

        $response->assertCreated();
        $this->assertDatabaseHas('subjects', ['name' => 'New Subject Name']);
    }

    public function testShowSubject()
    {
        $subject = Subject::factory()->create();

        $response = $this->get("/api/subject/{$subject->id}");

        $response->assertOk();
        $response->assertJson(['name' => $subject->name]);
    }

    public function testUpdateSubject()
    {
        $subject = Subject::factory()->create();
        $response = $this->patch("/api/subject/{$subject->id}", [
            'name' => 'Updated Subject Name',
        ]);

        $response->assertOk();
        $this->assertDatabaseHas('subjects', ['id' => $subject->id, 'name' => 'Updated Subject Name']);
    }

    public function testDeleteSubject()
    {
        $subject = Subject::factory()->create();

        $response = $this->delete("/api/subject/{$subject->id}");

        $response->assertNoContent();
        $this->assertDatabaseMissing('subjects', ['id' => $subject->id]);
    }

}
