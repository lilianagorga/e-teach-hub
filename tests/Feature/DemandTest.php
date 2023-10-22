<?php

namespace Tests\Feature;

use App\Models\Demand;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DemandTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->user = $this->authUser();
    }

    public function testUserCanCreateNewDemand()
    {
        $demand = Demand::factory()->raw();
        $this->postJson('/api/demands', $demand)->assertCreated();
        $this->assertDatabaseHas('demands', ['title' => $demand['title']]);
    }

    public function testUserCanUpdateNewDemand()
    {
        $demand = $this->createDemand();
        $this->patchJson('/api/demands/'. $demand->id, ['title' => $demand->title])->assertOk();
        $this->assertDatabaseHas('demands', ['title' => $demand->title]);
    }

    public function testUserCanDeleteNewDemand()
    {
        $demand = $this->createDemand();
        $this->deleteJson('/api/demands/'. $demand->id)->assertNoContent();
        $this->assertDatabaseMissing('demands', ['title' => $demand->title]);
    }

    public function testFetchAllDemandForUser()
    {
        $demand = $this->createDemand(['user_id' => $this->user->id]);
        $this->createDemand();
        $response = $this->getJson('/api/demands')->assertOk()->json();
        $this->assertEquals($response[0]['title'], $demand->title);
    }

    public function testFetchSingleDemandForUser()
    {
        $demand = $this->createDemand(['user_id' => $this->user->id]);
        $this->createDemand();
        $response = $this->getJson("/api/demands/{$demand->id}")->assertOk()->json();
        $this->assertEquals($response['title'], $demand->title);
    }
}
