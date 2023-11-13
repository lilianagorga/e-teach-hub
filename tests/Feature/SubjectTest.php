<?php

namespace Tests\Feature;

use App\Http\Controllers\SubjectsController;
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
        $this->user = $this->authUser();
    }

    public function test_check_if_subject_route_exists(): void
    {
        $response = $this->get('/api/subjects');
        $response->assertOk();

    }

    public function test_check_if_subject_controller_exists()
    {
        $this->assertTrue(class_exists(SubjectsController::class));
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
        $response = $this->get('/api/subjects');
        $response->assertOk();
    }

    public function testFetchAllSubjects()
    {
        Subject::factory()->count(5)->create();

        $response = $this->get('/api/subjects');

        $response->assertOk();
        $response->assertJsonCount(5);

    }

    public function testFetchSingleSubject()
    {
        $subject = $this->createSubject();

        $response = $this->get("/api/subjects/{$subject->id}");

        $response->assertOk();
        $response->assertJson(['id' => $subject->id]);
    }



    public function testStoreSubject()
    {
        $user = $this->authUser();
        $subject = Subject::factory()->make();
        $response = $this->post('/api/subjects', [
            'name' => $subject->name,
            'description' => $subject->description,
            'user_id' => $user->id
        ])->assertCreated();
        $this->assertEquals($subject->name, $response['name']);
        $this->assertDatabaseHas('subjects',
            [
                'name' => $subject->name,
                'description' => $subject->description,
                'user_id' => $user->id
            ]);
    }

    public function testShowSubject()
    {
        $subject = Subject::factory()->create();

        $response = $this->get("/api/subjects/{$subject->id}");

        $response->assertOk();
        $response->assertJson(['name' => $subject->name]);
    }

    public function testUpdateSubject()
    {
        $subject = $this->createSubject();
        $response = $this->put("/api/subjects/{$subject->id}", [
            'name' => $subject->name,
        ])->assertOk();
        $this->assertEquals($subject->name, $response['name']);
        $this->assertDatabaseHas('subjects', ['id' => $subject->id, 'name' => $subject->name]);
    }

    public function testDeleteSubject()
    {
        $subject = Subject::factory()->create();

        $response = $this->delete("/api/subjects/{$subject->id}");

        $response->assertNoContent();
        $this->assertDatabaseMissing('subjects', ['id' => $subject->id]);
    }

    public function testWhileStoringSubjectNameFieldIsRequired()
    {
        $this->withExceptionHandling();
        $this->postJson('/api/subjects')->assertUnprocessable()->assertJsonValidationErrors(['name']);;
    }

    public function testWhileUpdatingSubjectNameFieldIsRequired()
    {
        $subject = $this->createSubject();
        $this->withExceptionHandling();
        $this->putJson("/api/subjects/{$subject->id}")
            ->assertUnprocessable()
            ->assertJsonValidationErrors(['name']);
    }

}
