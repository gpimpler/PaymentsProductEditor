<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Style;

class StyleTest extends TestCase
{
    // use DatabaseTransactions;

    public function setUp()
    {
        parent::setUp();
    }

    /** @test **/
    public function a_style_should_belong_to_a_product()
    {
        $product = Style::find(1)->product()->get();

        $this->assertCount(1, $product);
    }
}
