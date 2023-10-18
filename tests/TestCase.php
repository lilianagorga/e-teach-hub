<?php

namespace Tests;

use App\Models\Subject;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

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
}
