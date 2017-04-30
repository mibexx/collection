<?php

namespace mibexx\collection\test\Unit\Element;


use mibexx\collection\Collection\Collection;
use mibexx\collection\Collection\CollectionInterface;
use mibexx\collection\Element\CollectionElement;
use PHPUnit\Framework\TestCase;

class CollectionElementTest extends TestCase
{
    public function testSetGetCollection()
    {
        $collection = $this->getMockBuilder(CollectionInterface::class)->getMock();

        $collectionElement = new CollectionElement();
        $collectionElement->set($collection);
        $this->assertEquals($collection, $collectionElement->getCollection());
    }

    public function testGetElement()
    {
        $collection = $this->getMockBuilder(Collection::class)
                           ->setMethods(["get"])
                           ->getMock();

        $collection->expects($this->once())
            ->method("get")
            ->with('test')
            ->willReturn("testVal");

        $collectionElement = new CollectionElement();
        $collectionElement->set($collection);
        $this->assertEquals("testVal", $collectionElement->get('test'));
    }
}