<?php

namespace B2;

class Bootstrap4 extends \B2\Composer\PackageBowerAsset
{
	static $bower_package_name = 'bower-asset/bootstrap';

	static $use_jquery = true;

	static $cdn_uses = [
		'//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css',
		'//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap-theme.min.css',
		'//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js',
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
