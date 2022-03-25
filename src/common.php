<?php

if (!function_exists('halt')) {
	function halt($agrs)
	{
		echo "<pre>";
		var_dump($agrs);
		exit;
	}
}