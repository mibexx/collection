<?php

namespace mibexx\collection\Parser;


use mibexx\collection\Collection\Collection;
use mibexx\collection\Collection\CollectionInterface;
use mibexx\collection\Element\CollectionElement;
use mibexx\collection\Element\SimpleElement;

class CollectionParser implements CollectionParserInterface
{
    /**
     * @param $data
     * @param CollectionInterface $collection
     */
    public function convertToCollection($data, CollectionInterface $collection)
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $element = new CollectionElement();
                $valCollection = new Collection();
                $this->convertToCollection($value, $valCollection);
                $element->set($valCollection);
            }
            else {
                $element = new SimpleElement($value);
            }
            $collection->set($key, $element);
        }
    }
}