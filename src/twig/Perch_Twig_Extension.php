<?php

use Twig\Twig_Extension;

class Perch_Twig_Extension extends \Twig_Extension
{
	public function getFunctions()
	{
		return array(
			'perch_runtime' => new Twig_Function_Method($this, 'runtime'),
			'perch_content' => new Twig_Function_Method($this, 'content'),
			'perch_location' => new Twig_Function_Method($this, 'location'),
		);
	}

	public function content($region)
	{
		return perch_content($region);
	}

	public function location($set_page)
	{
		return PerchSystem::set_page($set_page);
	}

	public function runtime()
	{
		require_once(__DIR__ . '/../../vendor/perch/runtime.php');
	}

	public function getName()
	{
		return 'perch';
	}
}
