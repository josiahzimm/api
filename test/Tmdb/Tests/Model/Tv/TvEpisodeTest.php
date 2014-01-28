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
namespace Tmdb\Tests\Model\Tv;

use Tmdb\Tests\Model\TestCase;
use Tmdb\Model\Tv\Episode;

class TvEpisodeTest extends TestCase
{
    /**
     * @test
     */
    public function shouldConstructTvEpisode()
    {
        $episode = new Episode();

        $this->assertInstancesOf(
            $episode,
            array(
                'getCredits'     => 'Tmdb\Model\Collection\Credits',
                'getExternalIds' => 'Tmdb\Model\Tv\ExternalIds',
                'getImages'      => 'Tmdb\Model\Collection\Images',
            )
        );
    }
}