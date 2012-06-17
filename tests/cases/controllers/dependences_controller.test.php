<?php
/* Dependences Test cases generated on: 2011-09-21 15:09:30 : 1316618310*/
App::import('Controller', 'Dependences');

class TestDependencesController extends DependencesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DependencesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.dependence');

	function startTest() {
		$this->Dependences =& new TestDependencesController();
		$this->Dependences->constructClasses();
	}

	function endTest() {
		unset($this->Dependences);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>