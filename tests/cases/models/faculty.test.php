<?php
/* Faculty Test cases generated on: 2012-05-21 17:05:34 : 1337612674*/
App::import('Model', 'Faculty');

class FacultyTestCase extends CakeTestCase {
	var $fixtures = array('app.faculty', 'app.department', 'app.laboratory');

	function startTest() {
		$this->Faculty =& ClassRegistry::init('Faculty');
	}

	function endTest() {
		unset($this->Faculty);
		ClassRegistry::flush();
	}

}
?>