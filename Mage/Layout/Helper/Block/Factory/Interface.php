<?php
/**
 *
 * @author Enrique Piatti (contacto@enriquepiatti.com)
 */
interface Mage_Layout_Helper_Block_Factory_Interface
{
	/**
	 * @param $block
	 * @param $attributes
	 * @return Mage_Layout_Block_Abstract
	 */
	public function getBlock($block, $attributes);
}