<?php

namespace Tests\Unit;

// change PHPUnit\Framework\TestCase to Tests\TestCase
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Author;

class AuthorTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
     public function only_name_is_required_to_create_an_author()
    {
        Author::firstOrCreate([
            'name' => 'John Doe',
        ]);

        $this->assertCount(1, Author::all());
    }
}
