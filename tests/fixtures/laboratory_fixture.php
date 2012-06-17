<?php
/* Laboratory Fixture generated on: 2012-05-21 17:05:19 : 1337612719 */
class LaboratoryFixture extends CakeTestFixture {
	var $name = 'Laboratory';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'ubicacion' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'department_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
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
			'department_id' => 1,
			'video1' => 'Lorem ipsum dolor sit amet',
			'video2' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>