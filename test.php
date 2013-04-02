<?php
/**
 *
 * @author Enrique Piatti (contacto@enriquepiatti.com)
 */
require_once 'autoload.php';
$layout = new Mage_Layout_Model_Layout();
$layout->getUpdate()->addHandle('default');
$layout->getUpdate()->load();
$layout->generateXml();
$layout->generateBlocks();
$output = $layout->getOutput();
echo $output;