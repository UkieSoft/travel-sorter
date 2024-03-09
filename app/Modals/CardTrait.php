<?php

namespace App\Modals;

use App\Contracts\Modals\ICard;

/**
 * Trait CardTrait
 *
 * @package App\Modals
 */
trait CardTrait
{
    /**
     * @var Place
     */
    private $fromPlace;

    /**
     * @var Place
     */
    private $toPlace;

    /**
     * @var string
     */
    private $seat;

    /**
     * @return Place
     */
    public function getToPlace(): Place
    {
        return $this->toPlace;
    }

    /**
     * @return Place
     */
    public function getFromPlace(): Place
    {
        return $this->fromPlace;
    }

    /**
     * @return string
     */
    public function getSeat(): string
    {
        return $this->seat;
    }

    /**
     * @param ICard $card
     *
     * @return bool
     */
    public function hasFromPlace(ICard $card): bool
    {
        return $this->fromPlace->getName() === $card->getToPlace()->getName();
    }

    /**
     * @param ICard $card
     *
     * @return bool
     */
    public function hasToPlace(ICard $card): bool
    {
        return $this->toPlace->getName() === $card->getFromPlace()->getName();
    }
}