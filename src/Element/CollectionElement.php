<?php

namespace mibexx\collection\Element;


use mibexx\collection\Collection\CollectionInterface;

class CollectionElement implements ElementCollectionInterface
{
    /**
     * @var CollectionInterface
     */
    private $collection;

    /**
     * CollectionElement constructor.
     * @param CollectionInterface $collection
     */
    public function __construct(CollectionInterface $collection = null)
    {
        $this->collection = $collection;
    }

    /**
     * @param CollectionInterface $value
     */
    public function set(CollectionInterface $value)
    {
        $this->collection = $value;
    }

    /**
     * @param string $key
     */
    public function get($key)
    {
        return $this->collection->get($key);
    }

    /**
     * @return CollectionInterface
     */
    public function getCollection()
    {
        return $this->collection;
    }

}