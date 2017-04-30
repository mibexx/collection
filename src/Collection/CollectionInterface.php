<?php

namespace mibexx\collection\Collection;


use mibexx\collection\Collection\Exception\CollectionElementMissedInterface;
use mibexx\collection\Element\ElementInterface;

interface CollectionInterface extends \Iterator
{
    /**
     * @param string $key
     * @param ElementInterface $element
     */
    public function set($key, ElementInterface $element);

    /**
     * @param string $key
     * @throws CollectionElementMissedInterface
     * @return ElementInterface
     */
    public function get($key);
}