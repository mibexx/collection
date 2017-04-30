<?php

namespace mibexx\collection\Element;


interface ElementValueInterface extends ElementInterface
{
    /**
     * @param string $value
     */
    public function set($value);

    /**
     * @return string
     */
    public function get();
}