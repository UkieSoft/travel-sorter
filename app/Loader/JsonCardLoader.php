<?php

namespace App\Loader;

use App\Contracts\Loader\ICardLoader;
use App\Contracts\Modals\ICard;
use App\Modals\BusCard;
use App\Modals\FlightCard;
use App\Modals\Place;
use App\Modals\TrainCard;

/**
 * Class JsonCardLoader
 *
 * @package App\Loader
 */
class JsonCardLoader implements ICardLoader
{
    /**
     * @param string $data
     *
     * @return array
     */
    public function loadCards(string $data): array
    {
        try {
            $jsonData = json_decode($data, true);
        } catch (\Exception $e) {
            throw new \InvalidArgumentException('Please input the valid JSON data.');
        }

        if (empty($jsonData)) {
            throw new \InvalidArgumentException('Invalid json data.');
        }

        $cards = [];

        foreach ($jsonData as $card) {
            $cards[] = $this->createCard($card);
        }

        return $cards;
    }

    private function createCard(array $card): ICard
    {
        $type = $card['type'];

        switch ($type) {
            case 'train':
                return new TrainCard(
                    new Place($card['from']),
                    new Place($card['to']),
                    $card['seat'],
                    $card['id']
                );
            case 'flight':
                return new FlightCard(
                    new Place($card['from']),
                    new Place($card['to']),
                    $card['seat'],
                    $card['id'],
                    $card['gate'],
                    $card['baggage']
                );
            case 'bus':
                return new BusCard(
                    new Place($card['from']),
                    new Place($card['to']),
                    $card['seat']
                );
            default:
                throw new \InvalidArgumentException('Unknown card type '.$type);
        }
    }
}