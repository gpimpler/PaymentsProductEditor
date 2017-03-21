<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Product;

class ProductTest extends TestCase
{
    // use DatabaseTransactions;

    public function setUp()
    {
        parent::setUp();
    }

    /** @test **/
    public function a_product_should_have_styles()
    {
        $styles = Product::find(1)->styles()->get();

        $this->assertCount(38, $styles);
    }

    /** @test **/
    public function should_get_product_types()
    {
        $types = Product::types();

        $this->assertInternalType('array', $types);
        $this->assertContains('check', $types);
        $this->assertContains('pen', $types);
    }
}
