<?php
require "arrayRemover.php";

class ArrayRemoverTest extends PHPUnit_Framework_TestCase
{
	public function testApakahSama()
	{
		$array = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1, 0, 0, 0,0,0,0,0,0,0,0,0,0,0, 1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
		
		$expected = [1,1];
		
		$arrayRemover = new arrayRemover();

		$this->assertEquals($arrayRemover->remove($array, 0), $expected);
	}
}