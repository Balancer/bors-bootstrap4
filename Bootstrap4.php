<?php

namespace B2;

class Bootstrap4 extends \B2\Composer\PackageBowerAsset
{
	static $bower_package_name = 'bower-asset/bootstrap';

	static $use_jquery = true;

	static function use_cdn()
	{
		return empty(\bors::$bower_asset_packages[static::$bower_package_name]) || \bors::$bower_asset_packages[static::$bower_package_name] < '4';
	}

	static $cdn_uses = [
		'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css',
		'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js',
		'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js',
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
