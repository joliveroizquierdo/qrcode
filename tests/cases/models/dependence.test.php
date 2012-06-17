<?php
/* Dependence Test cases generated on: 2012-05-21 17:05:59 : 1337612639*/
App::import('Model', 'Dependence');

class DependenceTestCase extends CakeTestCase {
	var $fixtures = array('app.dependence');

	function startTest() {
		$this->Dependence =& ClassRegistry::init('Dependence');
	}

	function endTest() {
		unset($this->Dependence);
		ClassRegistry::flush();
	}

}
?>