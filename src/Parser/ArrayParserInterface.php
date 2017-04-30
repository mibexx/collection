<?php

namespace mibexx\collection\Parser;


use mibexx\collection\Collection\CollectionInterface;

interface ArrayParserInterface
{
    /**
     * @param CollectionInterface $collection
     * @return array
     */
    public function convertToArray(CollectionInterface $collection);
}