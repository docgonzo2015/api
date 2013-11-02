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
 * @version 0.0.1
 */
namespace Tmdb\Api;

class Reviews
    extends AbstractApi
{
    /**
     * Get the full details of a review by ID.
     *
     * @param $review_id
     * @param array $options
     * @return mixed
     */
    public function getReview($review_id, array $options = array())
    {
        return $this->get('review/' . $review_id, $options);
    }
}