<?php

namespace mibexx\collection\Collection;


use mibexx\collection\Collection\Exception\CollectionElementMissed;
use mibexx\collection\Collection\Exception\CollectionElementMissedInterface;
use mibexx\collection\Element\ElementInterface;

class Collection implements CollectionInterface
{
    /**
     * @var ElementInterface[]
     */
    private $elements;

    /**
     * @param string $key
     * @param ElementInterface $element
     */
    public function set($key, ElementInterface $element)
    {
        $this->elements[$key] = $element;
    }

    /**
     * @param string $key
     * @return ElementInterface
     * @throws CollectionElementMissedInterface
     */
    public function get($key)
    {
        if (!isset($this->elements[$key])) {
            throw new CollectionElementMissed("Element missed: " . $key, 1000);
        }

        return $this->elements[$key];
    }

    public function current()
    {
        return current($this->elements);
    }

    public function next()
    {
        return next($this->elements);
    }

    public function key()
    {
        return key($this->elements);
    }

    public function valid()
    {
        return ($this->current() !== false);
    }

    public function rewind()
    {
        reset($this->elements);
    }


}