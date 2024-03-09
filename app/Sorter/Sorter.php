<?php

namespace App\Sorter;

use App\Contracts\Modals\ICard;
use App\Contracts\Sorter\ICardSort;

/**
 * Class Sorter
 *
 * @package App\Sorter
 */
class Sorter
{
    /**
     * @var array of ICard
     */
    private $cards = [];

    /**
     * @param array          $cards
     * @param ICardSort|null $sort
     */
    public function __construct(array $cards, ICardSort $sort = null)
    {
        $sort = $sort ? : new CardSort();

        foreach ($cards as $card) {
            $this->setCard($card);
        }

        $this->cards = $sort->sort($this->cards);
    }

    /**
     * @return array
     */
    public function getOrderedCards(): array
    {
        return $this->cards;
    }

    /**
     * @param ICard $card
     */
    private function setCard(ICard $card)
    {
        $this->cards[] = $card;
    }
}