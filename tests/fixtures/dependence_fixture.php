<?php
/* Dependence Fixture generated on: 2012-05-21 17:05:57 : 1337612637 */
class DependenceFixture extends CakeTestFixture {
	var $name = 'Dependence';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'ubicacion' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'funcion' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'video1' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'video2' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'ubicacion' => 'Lorem ipsum dolor sit amet',
			'funcion' => 'Lorem ipsum dolor sit amet',
			'video1' => 'Lorem ipsum dolor sit amet',
			'video2' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>