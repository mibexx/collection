<?php

namespace mibexx\collection\test\Unit\Element;


use mibexx\collection\Element\SimpleElement;
use PHPUnit\Framework\TestCase;

class SimpleElementTest extends TestCase
{
    public function testGet()
    {
        $simpleElement = new SimpleElement("TestVal");
        $this->assertEquals("TestVal", $simpleElement->get());
    }

    public function testSet()
    {
        $simpleElement = new SimpleElement();
        $simpleElement->set("testValue");
        $this->assertEquals("testValue", $simpleElement->get());
    }
}