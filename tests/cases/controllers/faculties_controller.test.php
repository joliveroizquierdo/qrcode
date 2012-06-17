<?php
/* Faculties Test cases generated on: 2011-09-21 15:09:43 : 1316618323*/
App::import('Controller', 'Faculties');

class TestFacultiesController extends FacultiesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FacultiesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.faculty', 'app.department');

	function startTest() {
		$this->Faculties =& new TestFacultiesController();
		$this->Faculties->constructClasses();
	}

	function endTest() {
		unset($this->Faculties);
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