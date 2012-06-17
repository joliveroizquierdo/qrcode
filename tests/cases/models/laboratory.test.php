<?php
/* Laboratory Test cases generated on: 2012-05-21 17:05:20 : 1337612720*/
App::import('Model', 'Laboratory');

class LaboratoryTestCase extends CakeTestCase {
	var $fixtures = array('app.laboratory', 'app.department', 'app.faculty');

	function startTest() {
		$this->Laboratory =& ClassRegistry::init('Laboratory');
	}

	function endTest() {
		unset($this->Laboratory);
		ClassRegistry::flush();
	}

}
?>