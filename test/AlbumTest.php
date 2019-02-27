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

   public function testAlbumHasGenre(): void
   {
    $this->assertClassHasAttribute('genre', Album::class);
   }


}
