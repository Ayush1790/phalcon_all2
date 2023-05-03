<?php

declare(strict_types=1);

namespace Tests\Unit;

use MyApp\Controllers\IndexController;

class IndexControllerTest extends AbstractUnitTest
{
    public function test()
    {
        $obj = new IndexController();
        $res = $obj->indexAction();
        $this->assertEquals("Ayush", $res);
    }
}
