<?php

namespace B2;

class Bootstrap4
{
	static function load()
	{
		// Bootstrap's JavaScript requires jQuery
		\B2\jQuery::load();

		if(empty(\bors::$bower_asset_packages['bower-asset/bootstrap']))
		{
			bors_use('//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
			bors_use('//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap-theme.min.css');
			bors_use('//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js');
		}
		else
		{
			$asset = \B2\cfg('bower-asset.path', '/bower-asset').'/bootstrap/dist';
			bors_use($asset.'/css/bootstrap.min.css');
			bors_use($asset.'/css/bootstrap-theme.min.css');
			bors_use($asset.'/js/bootstrap.min.js');
		}
	}
}
