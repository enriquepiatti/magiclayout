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

	public function getBaseUrl()
	{
		return $this->getData('base_url');
	}

	public function getSkinPath($relative = true)
	{
		return $relative ? : $this->getRootDir().'/'.$this->getData('skin_path');
	}

	public function getDesignPath($relative = true)
	{
		return $relative ? : $this->getRootDir().'/'.$this->getData('base_path');
	}

	public function getSkinUrl()
	{
		return $this->getBaseUrl().'/'.$this->getSkinPath();
	}

	public function getDefaultTheme()
	{
		return $this->getData('theme/default');
	}

	public function getLayoutFiles($area)
	{
		return $this->getData('files/'.$area);
	}

	public function getBlockFactoryClassName()
	{
		return $this->getData('block_factory');
	}

	public function getPackageName()
	{
		return $this->getData('package');
	}

}