<?php

namespace App\Modals;

/**
 * Class Place
 *
 * @package App\Modals
 */
class Place
{
    /**
     * @var string
     */
    private $name;

    /**
     * Place constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}