<?php

namespace App\Http\Controllers;

use App\Loader\JsonCardLoader;
use App\Sorter\Sorter;

/**
 * Class IndexController
 *
 * @package App\Http\Controllers
 */
class IndexController extends MainController
{
    public function index()
    {
        $cardsData = collect($this->getCardsData())->toJson();

        $loader = new JsonCardLoader();

        $cards  = $loader->loadCards($cardsData);

        $route  = new Sorter($cards);

        return view('welcome')->with(['cards' => $this->getCardsData(), 'orderedCards'=>$route->getOrderedCards()]);
    }
}
