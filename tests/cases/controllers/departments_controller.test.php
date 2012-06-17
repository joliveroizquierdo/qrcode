<?php
/* Departments Test cases generated on: 2012-05-21 17:05:31 : 1337612611*/
App::import('Controller', 'Departments');

class TestDepartmentsController extends DepartmentsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DepartmentsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.department', 'app.faculty', 'app.laboratory');

	function startTest() {
		$this->Departments =& new TestDepartmentsController();
		$this->Departments->constructClasses();
	}

	function endTest() {
		unset($this->Departments);
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