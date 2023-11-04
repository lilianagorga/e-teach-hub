<?php

namespace Tests;

use App\Models\Course;
use App\Models\Demand;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Http\Request;
use Laravel\Sanctum\Sanctum;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function setUp(): void
    {
        parent::setUp();
        $this->withoutExceptionHandling();
    }

    public function createSubject($args = [])
    {
        return Subject::factory()->create($args);
    }

    public function createCourse($args = [])
    {
        return Course::factory()->create($args);
    }

    public function createUser($args = [])
    {
        return User::factory()->create($args);
    }

    public function authUser()
    {
        $user = User::factory()->create();
        Sanctum::actingAs($user);
        return $user;
    }

}
