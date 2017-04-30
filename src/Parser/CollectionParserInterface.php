<?php

namespace mibexx\collection\Parser;


use mibexx\collection\Collection\CollectionInterface;

interface CollectionParserInterface
{
    /**
     * @param $data
     * @param CollectionInterface $collection
     */
    public function convertToCollection($data, CollectionInterface $collection);
}