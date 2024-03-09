<?php

namespace App\Sorter;

use App\Contracts\Sorter\ICardSort;

/**
 * Class CardSort
 *
 * @package App\Sorter
 */
class CardSort implements ICardSort
{
    /**
     * @param array $cards
     *
     * @return array
     */
    public function sort(array $cards): array
    {
        if (empty($cards)) {
            throw new \InvalidArgumentException('Not found the cards for sorting.');
        }

        $items  = $cards;
        $result = [array_pop($cards)];

        while (0 < $itemsCount = count($items)) {
            foreach ($items as $key => $item) {
                if (reset($result)->hasFromPlace($item)) {
                    array_unshift($result, $item);

                    unset($items[$key]);
                } elseif (end($result)->hasToPlace($item)) {
                    $result[] = $item;

                    unset($items[$key]);
                }

                if (1 === count($items)) {
                    unset($items[$key]);
                }
            }

            if (count($items) === $itemsCount) {
                throw new \InvalidArgumentException('Message: Impossible to find the following one card.');
            }
        }

        return $result;
    }
}