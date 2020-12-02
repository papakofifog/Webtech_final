<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include ('connect_db.php');
final class imagine extends Manage_database
{
    public function testFailure(): void
    {
        
        $this->assertTrue(false);
    }
}
?>