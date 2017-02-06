<?php

use Ytake\Annotations\AnnotationConfiguration;

/**
 * Class AnnotationScannerTest
 */
class AnnotationScannerTest extends \PHPUnit_Framework_TestCase
{
    public function testShould()
    {
        (new AnnotationConfiguration())->ignoredAnnotations();


    }
}
