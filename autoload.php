<?php
/**
 *
 * @author Enrique Piatti (contacto@enriquepiatti.com)
 */
class Autoloader
{

	static protected $_instance;

	/**
	 * Singleton pattern implementation
	 *
	 * @return Autoloader
	 */
	static public function instance()
	{
		if (!self::$_instance) {
			self::$_instance = new Autoloader();
		}
		return self::$_instance;
	}

	/**
	 * Register SPL autoload function
	 */
	static public function register()
	{
		spl_autoload_register(array(self::instance(), 'autoload'));
	}

	/**
	 * Load class source code
	 *
	 * @param string $class
	 * @return mixed
	 */
	public function autoload($class)
	{
		$classFile = str_replace(' ', DIRECTORY_SEPARATOR, ucwords(str_replace('_', ' ', $class)));
		$classFile.= '.php';
		//echo $classFile;die();
		return include $classFile;
	}

}

Autoloader::register();