<?php
namespace Always\Test;

use Always\Test\base\Tools;

class Test
{
	public function index()
	{
		$tools = new Tools();
		$tools->echo();
	}
}