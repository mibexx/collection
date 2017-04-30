<?php

namespace mibexx\collection\test\Integration;

use mibexx\collection\Collection\Collection;
use mibexx\collection\Element\CollectionElement;
use mibexx\collection\Element\SimpleElement;
use mibexx\collection\Parser\ArrayParser;
use mibexx\collection\Parser\CollectionParser;
use PHPUnit\Framework\TestCase;

class IntegrationTest extends TestCase
{
    public function testConvertArrayToCollection()
    {
        $list = [
            'foo' => 'bar',
            'fuzz' => [
                'foo' => 'buzz'
            ]
        ];

        $parser = new CollectionParser();
        $collection = new Collection();
        $parser->convertToCollection($list, $collection);

        $this->assertEquals('bar', $collection->get('foo')->get());
        $this->assertEquals('buzz', $collection->get('fuzz')->get('foo')->get());
    }

    public function testConvertCollectionToArray()
    {
        $testList = [
            'foo' => 'bar',
            'fuzz' => [
                'foo' => 'buzz'
            ]
        ];

        $parser = new ArrayParser();
        $collection = new Collection();

        $fuzz = new Collection();
        $fuzz->set('foo', new SimpleElement('buzz'));

        $collection->set('foo', new SimpleElement('bar'));
        $collection->set('fuzz', new CollectionElement($fuzz));

        $newList = $parser->convertToArray($collection);
        $this->assertEquals($testList, $newList);
    }
}