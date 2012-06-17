<?php
/* Department Test cases generated on: 2012-05-21 17:05:23 : 1337612543*/
App::import('Model', 'Department');

class DepartmentTestCase extends CakeTestCase {
	var $fixtures = array('app.department', 'app.faculty', 'app.laboratory');

	function startTest() {
		$this->Department =& ClassRegistry::init('Department');
	}

	function endTest() {
		unset($this->Department);
		ClassRegistry::flush();
	}

}
?>