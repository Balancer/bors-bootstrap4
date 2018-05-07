<?php

namespace B2;

class Bootstrap4 extends \B2\Composer\PackageBowerAsset
{
	var $use_jquery = true;

	var $cdn_uses = [
		'//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
		'//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css',
		'//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
	];

	static function local_uses()
	{
		$asset = \B2\cfg('bower-asset.path', '/bower-asset').'/bootstrap/dist';

		return [
			$asset.'/css/bootstrap.min.css',
			$asset.'/css/bootstrap-theme.min.css',
			$asset.'/js/bootstrap.min.js',
		];
	}
}
