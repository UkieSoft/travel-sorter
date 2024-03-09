<?php

namespace App\Contracts\Modals;

use App\Modals\Place;

/**
 * Interface ICard
 *
 * @package App\Contracts\Modals
 */
interface ICard extends ICardAdditional
{
    /**
     * @return Place
     */
    public function getToPlace(): Place;

    /**
     * @return Place
     */
    public function getFromPlace(): Place;

    /**
     * @return string
     */
    public function __toString(): string;
}