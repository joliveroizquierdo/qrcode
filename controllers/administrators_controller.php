<?php
class AdministratorsController extends AppController {

	var $name = 'Administrators';
    var $components=array('Auth');

	function index() {
		$this->Administrator->recursive = 0;
		$this->set('administrators', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'administrator'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('administrator', $this->Administrator->read(null, $id));
	}

	function login(){
				
	var $loginRedirect = '';
				
	}
    	function logout(){
		$this->redirect($this->Auth->logout());
	}
	

	function add() {
		if (!empty($this->data)) {
			$this->Administrator->create();
			if ($this->Administrator->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'administrator'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'administrator'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'administrator'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Administrator->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'administrator'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'administrator'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Administrator->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'administrator'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Administrator->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Administrator'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Administrator'));
		$this->redirect(array('action' => 'index'));
	}
}
?>