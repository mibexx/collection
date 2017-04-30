<?php

namespace mibexx\collection\Parser;


use mibexx\collection\Collection\CollectionInterface;
use mibexx\collection\Element\ElementCollectionInterface;
use mibexx\collection\Element\ElementValueInterface;

class ArrayParser implements ArrayParserInterface
{
    /**
     * @param CollectionInterface $collection
     * @return array
     */
    public function convertToArray(CollectionInterface $collection)
    {
        $content = [];
        foreach ($collection as $key => $element) {
            if ($element instanceof ElementValueInterface) {
                $content[$key] = $element->get();
            }
            elseif ($element instanceof ElementCollectionInterface) {
                $content[$key] = $this->convertToArray($element->getCollection());
            }
        }
        return $content;
    }

}