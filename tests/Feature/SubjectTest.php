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

}
