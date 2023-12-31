<?php

namespace Tests\Feature;

use App\Models\Course;
use App\Models\Subject;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->user = $this->authUser();
    }

    public function testUserHasManySubjects()
    {
        $user = $this->createUser();
        $this->createSubject(['user_id' => $user->id]);
        $this->assertInstanceOf(Subject::class, $user->subjects->first());
    }

    public function testUserHasManyCourses()
    {
        $user = $this->createUser();
        $this->createCourse(['user_id' => $user->id]);
        $this->assertInstanceOf(Course::class, $user->courses->first());
    }

    public function testFetchAllSubjectsForUser()
    {
        $subject = $this->createSubject(['user_id' => $this->user->id]);
        $this->createSubject();
        $response = $this->getJson('/api/subjects')->assertOk()->json();
        $this->assertEquals($response[0]['name'], $subject->name);
    }

    public function testFetchAllCoursesForUser()
    {
        $course = $this->createCourse(['user_id' => $this->user->id]);
        $this->createCourse();
        $response = $this->getJson('/api/courses')->assertOk()->json();
        $this->assertEquals($response[0]['name'], $course->name);
    }

    public function testFetchSingleSubjectForUser()
    {
        $subject = $this->createSubject(['user_id' => $this->user->id]);
        $this->createSubject();
        $response = $this->getJson("/api/subjects/{$subject->id}")->assertOk()->json();
        $this->assertEquals($response['name'], $subject->name);
    }

    public function testFetchSingleCourseForUser()
    {
        $course = $this->createCourse(['user_id' => $this->user->id]);
        $this->createCourse();
        $response = $this->getJson("/api/courses/{$course->id}")->assertOk()->json();
        $this->assertEquals($response['name'], $course->name);
    }
}
