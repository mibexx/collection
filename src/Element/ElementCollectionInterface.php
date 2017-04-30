<?php

namespace mibexx\collection\Element;


use mibexx\collection\Collection\CollectionInterface;

interface ElementCollectionInterface extends ElementInterface
{
    /**
     * @param  $value
     */
    public function set(CollectionInterface $value);

    /**
     * @param string $key
     * @return string
     */
    public function get($key);

    /**
     * @return CollectionInterface
     */
    public function getCollection();
}