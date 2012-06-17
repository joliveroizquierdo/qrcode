<?php
/* Laboratories Test cases generated on: 2011-09-21 15:09:53 : 1316618333*/
App::import('Controller', 'Laboratories');

class TestLaboratoriesController extends LaboratoriesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LaboratoriesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.laboratory', 'app.department', 'app.faculty');

	function startTest() {
		$this->Laboratories =& new TestLaboratoriesController();
		$this->Laboratories->constructClasses();
	}

	function endTest() {
		unset($this->Laboratories);
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