<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include ('connect_db.php');
final class TrueTest extends TestCase
{
    public function testFailure(): void

    {
        //$ship_db=new Manage_database();
        $this->assertTrue(true);
    }
}