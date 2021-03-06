<?php

/**
 * This file is part of the Tmdb PHP API created by Michael Roterman.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Tmdb
 * @author Michael Roterman <michael@wtfz.net>
 * @copyright (c) 2013, Michael Roterman
 * @version 4.0.0
 */

namespace Tmdb\Api;

/**
 * Class Networks
 * @package Tmdb\Api
 * @see http://docs.themoviedb.apiary.io/#networks
 */
class Networks extends AbstractApi
{
    /**
     * This method is used to retrieve the basic information about a TV network.
     *
     * You can use this ID to search for TV shows with the discover.
     * At this time we don't have much but this will be fleshed out over time.
     *
     * @param int $network_id
     * @param array $parameters
     * @param array $headers
     * @return mixed
     */
    public function getNetwork($network_id, array $parameters = [], array $headers = [])
    {
        return $this->get('network/' . $network_id, $parameters, $headers);
    }
}
