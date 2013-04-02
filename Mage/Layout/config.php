<?php
/**
 *
 * @author Enrique Piatti (contacto@enriquepiatti.com)
 */
return array(
	'base_url' => 'http://local.magiclayout.com',
	'base_path' => 'design',	// relative to index.php
	'skin_path' => 'skin',		// relative to index.php
	'files' => array(
		'frontend' => array(
			'page.xml',
		),
		'backend' => array(
			'main.xml'
		),
	),
	'use_cache' => false,
	'package' => 'default',
	'theme' => array(
		'default' => 'default',		// type => theme
		'default_ua_regexp' => '',
	),
	'block_factory' => '',		// some class name implementing Mage_Layout_Helper_Block_Factory_Interface
);