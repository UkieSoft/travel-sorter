<?php

namespace App\Modals;

use App\Contracts\Modals\ICard;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TrainCard
 *
 * @package App\Modals
 */
class TrainCard extends Model implements ICard
{
    use CardTrait;

    /**
     * @var string
     */
    private $train;

    /**
     * TrainCard constructor.
     *
     * @param Place  $fromPlace
     * @param Place  $toPlace
     * @param string $seat
     * @param string $train
     */
    public function __construct(Place $fromPlace, Place $toPlace, string $seat, string $train)
    {
        $this->fromPlace = $fromPlace;
        $this->toPlace   = $toPlace;
        $this->seat      = $seat;
        $this->train     = $train;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return sprintf('Take train %s from %s to %s. Seat number: %s', $this->train, $this->fromPlace, $this->toPlace, $this->seat);
    }
}
