<?php

namespace mibexx\collection\test\Unit\Element;


use mibexx\collection\Collection\Collection;
use mibexx\collection\Element\ElementInterface;
use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase
{
    public function testSetGet()
    {
        $element = $this->getMockBuilder(ElementInterface::class)->getMock();

        $collection = new Collection();
        $collection->set('unit.test', $element);
        $this->assertEquals($element, $collection->get('unit.test'));
    }

    /**
     * @expectedException \mibexx\collection\Collection\Exception\CollectionElementMissedInterface
     * @expectedExceptionCode 1000
     */
    public function testGetMissedElement()
    {
        $collection = new Collection();
        $collection->get('missing.element');
    }
}