<?php
/* Faculty Fixture generated on: 2012-05-21 17:05:33 : 1337612673 */
class FacultyFixture extends CakeTestFixture {
	var $name = 'Faculty';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'ubicacion' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'decano' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'mision' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'vision' => array('type' => 'text', 'null' => false, 'default' => NULL),
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
			'decano' => 'Lorem ipsum dolor sit amet',
			'mision' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'vision' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'video1' => 'Lorem ipsum dolor sit amet',
			'video2' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>