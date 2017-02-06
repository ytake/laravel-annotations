<?php

use Ytake\Annotations\Annotation\RequestMethod;
use Ytake\Annotations\Annotation\RequestMapping;

/**
 * Class TestStubController
 */
class TestStubController
{
    /**
     * @RequestMapping("/test", method={RequestMethod::GET})
     */
    public function invoke()
    {

    }
}
