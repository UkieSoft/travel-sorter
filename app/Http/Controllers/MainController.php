<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    private $cardsData = [
            [
                'type' => 'train',
                'from' => 'Madrid',
                'to'   => 'Barcelona',
                'id'   => '78A',
                'seat' => '45B',
            ],
            [
                'type' => 'bus',
                'from' => 'Barcelona',
                'to'   => 'Gerona Airport',
                'seat' => null,
            ],
            [
                'type'    => 'flight',
                'from'    => 'Stockholm',
                'to'      => 'New York JFK',
                'id'      => 'SK22',
                'seat'    => '7B',
                'gate'    => '22B',
                'baggage' => null,
            ],
            [
                'type'    => 'flight',
                'from'    => 'Gerona Airport',
                'to'      => 'Stockholm',
                'id'      => 'SK455',
                'seat'    => '3A',
                'gate'    => '45B',
                'baggage' => '344',
            ],
        ];

    protected function getCardsData(): array {

        return $this->cardsData;
    }
}
