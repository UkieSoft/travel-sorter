<?php

namespace App\Contracts\Modals;

/**
 * Interface ICardAdditional
 *
 * @package App\Contracts\Modals
 */
interface ICardAdditional
{
    /**
     * @param ICard $card
     *
     * @return bool
     */
    public function hasFromPlace(ICard $card): bool;

    /**
     * @param ICard $card
     *
     * @return bool
     */
    public function hasToPlace(ICard $card): bool;
}