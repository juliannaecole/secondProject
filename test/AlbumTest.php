<?php
/**
 * Created by PhpStorm.
 * User: MAlzate
 * Date: 2/26/2019
 * Time: 7:30 PM
 */

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class AlbumTest extends TestCase
{
    public function testAlbumHasArtist(): void
    {
        $this->assertClassHasAttribute('artist', Album::class);
    }
    public function testAlbumHasTitle(): void
    {
        $this->assertClassHasAttribute('title', Album::class);
    }
    public function testAlbumHasYear(): void
    {
        $this->assertClassHasAttribute('year', Album::class);
    }
    public function testAlbumHasTotalSongs(): void
    {
        $this->assertClassHasAttribute('totalsongs', Album::class);
    }
    public function testAlbumHasGenre(): void
    {
        $this->assertClassHasAttribute('genre', Album::class);
    }
    public function testAlbumHasGoodRating(): void
    {
        $this->assertTrue(
            method_exists(Album::class, 'goodRating') //class and method
        );
    }

    public function testAlbumHasBadRating(): void
    {
        $this->assertTrue(
            method_exists(Album::class, 'badRating') //class and method
        );
    }
    public function testNevermindAlbumHasGoodRating(): void
    {
        $nevermind = new NevermindAlbum();

        $this->assertEquals(1, $nevermind->goodRating());
    }

    public function testNevermindAlbumHasBadRating(): void
    {
        $nevermind = new NevermindAlbum();

        $this->assertEquals(-1, $nevermind->badRating());
    }
    public function testKidzBopChristmasAlbumHasGoodRating(): void
    {
        $kidzbop = new KidzBopChristmasAlbum();

        $this->assertEquals(1, $kidzbop->goodRating());
    }

    public function testKidzBopChristmasAlbumHasBadRatin(): void
    {
        $kidzbop = new  KidzBopChristmasAlbum();

        $this->assertEquals(-1, $kidzbop->badRating());
    }
    public function testAmericanIdiotAlbumHasGoodRating(): void
    {
        $americanIdiot = new AmericanIdiotAlbum();

        $this->assertEquals(1, $americanIdiot->goodRating());
    }

    public function testAmericanIdiotAlbumHasBadRatin(): void
    {
        $americanIdiot = new  AmericanIdiotAlbum();

        $this->assertEquals(-1, $americanIdiot->badRating());
    }

    public function testBangerzAlbumHasGoodRating(): void
    {
        $bangerz = new BangerzAlbum();

        $this->assertEquals(1, $bangerz->goodRating());
    }

    public function testBangerzAlbumHasBadRating(): void
    {
        $bangerz = new BangerzAlbum();

        $this->assertEquals(-1, $bangerz->badRating());
    }

    public function testBecausetheInternetAlbumHasGoodRating(): void
    {
        $becausetheInternet = new BecausetheInternetAlbum();

        $this->assertEquals(1, $becausetheInternet->goodRating());
    }

    public function testBecausetheInternetAlbumHasBadRating(): void
    {
        $becausetheInternet = new BecausetheInternetAlbum();

        $this->assertEquals(-1, $becausetheInternet->badRating());
}

    public function testFuneralAlbumHasGoodRating(): void
    {
        $funeral = new FuneralAlbum();

        $this->assertEquals(1, $funeral->goodRating());
    }

    public function testFuneralAlbumHasBadRating(): void
    {
        $funeral = new FuneralAlbum();

        $this->assertEquals(-1, $funeral->badRating());
    }

    public function testPortOfMorrowAlbumHasGoodRating(): void
    {
        $portOfMorrow = new NevermindAlbum();

        $this->assertEquals(1, $portOfMorrow->goodRating());
    }

    public function testPortOfMorrowAlbumHasBadRating(): void
    {
        $portOfMorrow = new PortOfMorrowAlbum();

        $this->assertEquals(-1, $portOfMorrow->badRating());
    }
}
