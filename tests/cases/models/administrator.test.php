<?php
/* Administrator Test cases generated on: 2011-09-21 15:09:23 : 1316617943*/
App::import('Model', 'Administrator');

class AdministratorTestCase extends CakeTestCase {
	var $fixtures = array('app.administrator');

	function startTest() {
		$this->Administrator =& ClassRegistry::init('Administrator');
	}

	function endTest() {
		unset($this->Administrator);
		ClassRegistry::flush();
	}

}
?>