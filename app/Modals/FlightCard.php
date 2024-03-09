<?php

namespace App\Modals;

use App\Contracts\Modals\ICard;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FlightCard
 *
 * @package App\Modals
 */
class FlightCard extends Model implements ICard
{
    use CardTrait;

    /**
     * @var string
     */
    private $flightId;
    /**
     * @var string
     */
    private $gate;
    /**
     * @var string
     */
    private $baggage;

    /**
     * FlightCard constructor.
     *
     * @param Place       $fromPlace
     * @param Place       $toPlace
     * @param string      $flightId
     * @param string      $gate
     * @param string      $seat
     * @param string|null $baggage
     */
    public function __construct(Place $fromPlace, Place $toPlace, string $flightId, string $gate, string $seat, string $baggage = null)
    {
        $this->fromPlace = $fromPlace;
        $this->toPlace   = $toPlace;
        $this->flightId  = $flightId;
        $this->gate      = $gate;
        $this->seat      = $seat;
        $this->baggage   = $baggage;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        $baggageInfo = 'Baggage will we automatically transferred from your last leg';
        if (null !== $this->baggage) {
            $baggageInfo = sprintf('Baggage drop at ticket counter: %s.', $this->baggage);
        }

        return sprintf(
            'From %s, take flight %s to %s. Gate %s, seat %s. %s',
            $this->fromPlace,
            $this->flightId,
            $this->toPlace,
            $this->gate,
            $this->seat,
            $baggageInfo
        );
    }
}
