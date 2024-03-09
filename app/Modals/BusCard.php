<?php

namespace App\Modals;

use App\Contracts\Modals\ICard;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BusCard
 *
 * @package App\Modals
 */
class BusCard extends Model implements ICard
{
    use CardTrait;

    /**
     * BusCard constructor.
     *
     * @param Place       $fromPlace
     * @param Place       $toPlace
     * @param string|null $seat
     */
    public function __construct(Place $fromPlace, Place $toPlace, string $seat = null)
    {
        $this->fromPlace = $fromPlace;
        $this->toPlace   = $toPlace;
        $this->seat      = $seat;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        $seatInfo = 'No seat assignment.';

        if (null !== $this->seat) {
            $seatInfo = sprintf('Seat: %s', $this->seat);
        }

        return sprintf('Take the airport bus from %s to %s. %s', $this->fromPlace, $this->toPlace, $seatInfo);
    }
}
