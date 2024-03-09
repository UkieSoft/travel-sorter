<?php

namespace App\Contracts\Sorter;

use App\Contracts\Modals\ICardAdditional;

/**
 * Interface ICardSort
 *
 * @package App\Contracts\Sorter
 */
interface ICardSort
{
    /**
     * @param ICardAdditional[] $cards
     *
     * @return array
     */
    public function sort(array $cards): array;
}