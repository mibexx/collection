<?php

namespace mibexx\collection\Element;


class SimpleElement implements ElementValueInterface
{
    /**
     * @var string
     */
    private $value;

    /**
     * SimpleElement constructor.
     * @param string $value
     */
    public function __construct($value = "")
    {
        $this->value = $value;
    }

    public function set($value)
    {
        $this->value = $value;
    }

    public function get()
    {
        return $this->value;
    }

}