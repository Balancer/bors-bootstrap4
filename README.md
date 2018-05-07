# bors/bootstrap4

[Bootstrap](http://getbootstrap.com/) The most popular HTML, CSS, and JS library in the world

```bash
# To use the CDN-version
composer require bors/bootstrap3

# To use the local asset version, you also need:
composer require bower-asset/bootstrap=^4.0
```

The local or CDN version is detected by the install of the package `bower-asset/bootstrap-tagsinput`.

Call `\B2\Bootstrap3::load();` in `pre_show()` method on any view or config.

```php
namespace \MyApp;

class View extends \B2\View
{
	function pre_show()
	{
		\B2\Bootstrap3::load();
		return parent::pre_show();
	}
}
```
