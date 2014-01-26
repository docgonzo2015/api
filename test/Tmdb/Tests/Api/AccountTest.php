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
namespace Tmdb\Tests\Api;

class AccountTest extends TestCase
{
    /**
     * @test
     * @expectedException Tmdb\Exception\NotImplementedException
     */
    public function shouldGetAccount()
    {
        $api = $this->getApiMock();
        $api->getAccount();
    }

    /**
     * @test
     * @expectedException Tmdb\Exception\NotImplementedException
     */
    public function shouldGetLists()
    {
        $api = $this->getApiMock();
        $api->getLists('account_id');
    }

    /**
     * @test
     * @expectedException Tmdb\Exception\NotImplementedException
     */
    public function shouldGetFavoriteMovies()
    {
        $api = $this->getApiMock();
        $api->getFavoriteMovies('account_id');
    }

    /**
     * @test
     * @expectedException Tmdb\Exception\NotImplementedException
     */
    public function shouldFavorite()
    {
        $api = $this->getApiMock();
        $api->favorite('account_id');
    }

    /**
     * @test
     * @expectedException Tmdb\Exception\NotImplementedException
     */
    public function shouldGetRatedMovies()
    {
        $api = $this->getApiMock();
        $api->getRatedMovies('account_id');
    }

    /**
     * @test
     * @expectedException Tmdb\Exception\NotImplementedException
     */
    public function shouldGetMovieWatchlist()
    {
        $api = $this->getApiMock();
        $api->getMovieWatchlist('account_id');
    }

    /**
     * @test
     * @expectedException Tmdb\Exception\NotImplementedException
     */
    public function shouldWatchlist()
    {
        $api = $this->getApiMock();
        $api->watchlist('account_id');
    }

    protected function getApiClass() {
        return 'Tmdb\Api\Account';
    }
}