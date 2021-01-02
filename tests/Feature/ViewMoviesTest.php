<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Http;

class ViewMoviesTest extends TestCase
{
    /** @test */

    public function the_main_page_shows_correct_info()
    {
        Http::fake([
            'https://api.themoviedb.org/3/movie/popular' => Http::response([
                'foo' => 'bar'
            ], 200)
        ]);
        $response = $this->get(route('home'));

        $response->assertSuccessful();
        $response->assertSee('Popular Movies');
    }
}
