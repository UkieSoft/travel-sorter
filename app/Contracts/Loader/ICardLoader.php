<?php

namespace App\Contracts\Loader;

/**
 * Interface ICardLoader
 *
 * @package App\Contracts\Loader
 */
interface ICardLoader
{
    /**
     * @param string $data
     *
     * @return array
     */
    public function loadCards(string $data): array;
}