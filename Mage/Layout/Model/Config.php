<?php
/**
 *
 * @author Enrique Piatti (contacto@enriquepiatti.com)
 */
class Mage_Layout_Model_Config extends Mage_Layout_Varien_Object
{
	static protected $_instance;

	/**
	 * Singleton pattern implementation
	 *
	 * @return Mage_Layout_Model_Config
	 */
	static public function getInstance()
	{
		if (!self::$_instance) {
			$data = include( dirname(__FILE__) . '/../config.php');
			self::$_instance = new Mage_Layout_Model_Config($data);
		}
		return self::$_instance;
	}

	public function getRootDir()
	{
		// realpath($appRoot)
		return $_SERVER['DOCUMENT_ROOT'];
	}


}