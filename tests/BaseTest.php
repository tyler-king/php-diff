<?php
require_once ('Wally/Diff.php');
 
class BaseTest extends PHPUnit_Framework_TestCase
{
    public function testDiffBase()
    {
        $n = @new \Wally\Diff;

        $diff = trim($n->diff("abcdefghi", "abcdefghi"));
        
        $this->assertEquals("abcdefghi", $diff);
    }
}