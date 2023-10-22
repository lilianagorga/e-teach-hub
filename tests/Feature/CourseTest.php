<?php

namespace Tests\Feature;

use App\Http\Controllers\CourseController;
use App\Models\Course;
use App\Models\Subject;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class CourseTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->user = $this->authUser();
    }

    public function test_check_if_course_route_exists(): void
    {
        $response = $this->get('/api/course');

        $response->assertOk();
    }

    public function test_check_if_course_controller_exists()
    {
        $this->assertTrue(class_exists(CourseController::class));
    }

    public function test_check_if_course_model_exists()
    {
        $this->assertTrue(class_exists(Course::class));
    }

    public function test_check_if_course_migration_exists()
    {
        $this->artisan('migrate');
        $this->assertTrue(Schema::hasTable('courses'));
    }

    public function testCreateCourseWithSubject()
    {
        $subject = Subject::factory()->create();

        $course = Course::factory()->create([
            'subject_id' => $subject->id,
        ]);
        $this->assertDatabaseHas('courses', [
            'id' => $course->id,
            'name' => $course->name,
            'subject_id' => $subject->id
        ]);
        $this->assertEquals('', $course->name);
        $this->assertEquals($subject->id, $course->subject_id);
    }

    public function testIndexCourse()
    {
        $response = $this->get('/api/course');

        $response->assertOk();
    }

    public function testFetchAllCourses()
    {
        Course::factory()->count(5)->create();

        $response = $this->get('/api/course');

        $response->assertOk();
        $response->assertJsonCount(5);
    }

    public function testFetchSingleCourse()
    {
        $course = Course::factory()->create();

        $response = $this->get("/api/course/{$course->id}");

        $response->assertOk();
        $response->assertJson(['id' => $course->id]);
    }

    public function testStoreCourse()
    {
        $user = $this->authUser();
        $subject = $this->createSubject();
        $courseData = [
            'name' => 'New Course Name',
            'seats' => 30,
            'subject_id' => $subject->id,
            'user_id' => $user->id
        ];

        $response = $this->post('/api/course', $courseData);

        $response->assertCreated();
        $this->assertDatabaseHas('courses', $courseData);
    }

    public function testShowCourse()
    {
        $course = Course::factory()->create();

        $response = $this->get("/api/course/{$course->id}");
        $response->assertOk();
        $response->assertJson(['name' => $course->name]);
    }

    public function testUpdateCourse()
    {
        $course = Course::factory()->create();
        $subject = $this->createSubject();
        $courseData = [
            'name' => 'New Course Name',
            'seats' => 30,
            'subject_id' => $subject->id,
        ];
        $response = $this->put("/api/course/{$course->id}", $courseData);

        $response->assertOk();
        $this->assertDatabaseHas('courses', $courseData);
    }

    public function testDeleteCourse()
    {
        $course = Course::factory()->create();

        $response = $this->delete("/api/course/{$course->id}");

        $response->assertNoContent();
        $this->assertDatabaseMissing('courses', ['id' => $course->id]);
    }

    public function testWhileStoringCourseNameFieldIsRequired()
    {
        $this->withExceptionHandling();
        $this->postJson('/api/course')->assertUnprocessable()->assertJsonValidationErrors(['name']);
    }

    public function testWhileUpdatingCourseNameFieldIsRequired()
    {
        $course = $this->createCourse();
        $this->withExceptionHandling();
        $this->putJson("/api/course/{$course->id}")
            ->assertUnprocessable()
            ->assertJsonValidationErrors(['name']);
    }
}
