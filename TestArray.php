<?php
require "array.php";

class DataTest extends PHPUnit_Framework_TestCase
{
	public function testApakahSama()
	{
		$array = new Arraye();
		$this->assertEquals($array->returnArray(), ['a', 'b', 'c', 'nama' => 'budiman']);
	}
}