<?php
/* Administrators Test cases generated on: 2011-09-21 15:09:55 : 1316618275*/
App::import('Controller', 'Administrators');

class TestAdministratorsController extends AdministratorsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AdministratorsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.administrator');

	function startTest() {
		$this->Administrators =& new TestAdministratorsController();
		$this->Administrators->constructClasses();
	}

	function endTest() {
		unset($this->Administrators);
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